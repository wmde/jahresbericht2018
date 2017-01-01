#!/bin/bash

set -o nounset
set -o errexit

# Must be executed from the project root (where Envfile is located). Will
# operate on and modify the *current* files in tree. Be sure to operate on a
# copy.
[[ ! -f Envfile ]] && echo "error: not invoked from project root" && exit 1

source Envfile
revision=$(git rev-parse --short HEAD)

sed -i -e "s|__VERSION_BUILD__|$revision|g" VERSION.txt
# Workaround for older BSD versions of sed that need
# a suffix after -i while interpreting -e as the suffix.
[[ -f VERSION.txt-e ]] && rm VERSION.txt-e

for f in $(find assets/js -type f -name *.js); do
	if [[ $(basename $f) == jquery.js ]]; then
		# yui does not work with jquery 2.2
		# https://github.com/yui/yuicompressor/issues/234
		closure-compiler --js $f --js_output_file $f.min && mv $f.min $f
	else
		yuicompressor --type js -o $f.min --nomunge --charset utf-8 $f && mv $f.min $f
	fi
done

for f in $(ls assets/*.css); do
	myth $f $f
	# yuicompressor breaks spaces in calc() expressions
	sqwish $f -o $f.min && mv $f.min $f
done

# We can't restrict image search to ico and img directories as images may be
# located in i.e. vid directories if they are posters.
pids=()
for f in $(find assets -type f -name *.png); do
	# -ow flag requires pngcrush >=1.7.22
	pngcrush -rem alla -rem text -q -ow $f &
	pids+=($!)
done
for f in $(find assets -type f -name *.jpg); do
	( mogrify -strip $f
	# in place optimization requires jpegtran >=8d
	jpegtran -optimize -copy none -outfile $f $f ) &
	pids+=($!)
done
for pid in $pids; do wait $pid; done

rm -fr .git*
