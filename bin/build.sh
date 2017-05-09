#!/bin/bash -x
#
# Atelier Disko Distribution
#
# Copyright (c) 2013 Atelier Disko - All rights reserved.
#
# Licensed under the AD General Software License v1.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#
# You should have received a copy of the AD General Software
# License. If not, see http://atelierdisko.de/licenses.
#

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

version=$(cat VERSION.txt)
sed -i -e "s|__PROJECT_VERSION__|$version|g" app/views/elements/de/header.php
sed -i -e "s|__PROJECT_VERSION__|$version|g" app/views/elements/en/header.php
rm -f app/views/elements/*/header.php-e

# yui does not work with jquery 2.2
# https://github.com/yui/yuicompressor/issues/234
for f in $(find app/webroot/assets/js -type f -name *.js ! -name jquery.js); do
	yuicompressor --type js -o $f.min --nomunge --charset utf-8 $f && mv $f.min $f
done
for f in $(find app/webroot/assets/js -type f -name jquery.js); do
	uglifyjs --compress --mangle -o $f.min -- $f && mv $f.min $f
done

for f in $(ls app/webroot/assets/css/*.css); do
	myth $f $f
	# yuicompressor breaks spaces in calc() expressions
	sqwish $f -o $f.min && mv $f.min $f
done

# We can't restrict image search to ico and img directories as images may be
# located in i.e. vid directories if they are posters.
for f in $(find app/webroot/assets -type f -name *.png); do
	# -ow flag requires pngcrush >=1.7.22
	# pngcrush -rem alla -rem text -q -ow $f
	pngcrush -rem alla -rem text -q $f $f.tmp && mv $f.tmp $f
done
for f in $(find app/webroot/assets -type f -name *.jpg); do
	mogrify -strip $f
	# in place optimization requires jpegtran >=8d
	# jpegtran -optimize -copy none -outfile $f $f
	jpegtran -optimize -copy none -outfile $f.tmp $f && mv $f.tmp $f
done

# Ensure we don't install dev tooling in production, for security (potential
# information disclosure) and performance (larger file search trees) reasons.
# if [[ $CONTEXT != "prod" ]]; then
# 	composer -d app --prefer-dist install
# else
# 	composer -d app --prefer-dist --no-dev install
# fi
# composer -d app dump-autoload --optimize

rm -fr .git*
