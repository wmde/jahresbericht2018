#
# Atelier Disko Distribution
#
# Copyright (c) 2013-2014 Atelier Disko - All rights reserved.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#

source $DETA/util.sh
source $DETA/asset.sh
source $DETA/vcs.sh

role SOURCE
role TARGET

TMP=$(mktemp -d -t deta)

BRANCH=$(git_current_branch)
msgwarn "Selected branch %s!" $BRANCH

dry

msg "Preparing build stage..."

msg "Cloning repository..."
git clone --verbose --single-branch --recursive --branch $BRANCH $SOURCE_REPO $TMP

msg "Determing versions...."
REV_HEAD=$(git_rev_for HEAD)

read -p "Optimize? (Y/n) " OPTIMIZE

#
# Continue build
#
msg "Entering build stage..."

msg "Installing submodules..."
cd $TMP
git submodule update --init --recursive
cd -

# Version
fill "__VERSION_BUILD__" "$REV_HEAD" $TMP/config/current.env
fill "__PROJECT_VERSION_BUILD__" "$REV_HEAD" $TMP/app/webroot/index.html
fill "__PROJECT_VERSION_BUILD__" "$REV_HEAD" $TMP/assets/css/base.css
fill "__PROJECT_VERSION_BUILD__" "$REV_HEAD" $TMP/assets/js/base.js

for FILE in $(find -L $TMP/assets -name "*.css"); do
	myth $FILE $FILE
	msgok "Myth processed %s." $FILE
done
if [[ "$OPTIMIZE" != "n" ]]; then
	for FILE in $(find -L -E $TMP/assets -name "*.js"); do
		compress_js $FILE $FILE
	done

	for FILE in $(find -L $TMP/assets -name "*.css"); do
		compress_css $FILE $FILE
	done

	for FILE in $(find -L $TMP/assets -name "*.png"); do
		compress_img $FILE $FILE
	done
fi

msg "Moving assets directory in webroot."
mv -v $TMP/assets $TMP/app/webroot/

vcs_clear $TMP

msg "Fixing group permissions..."
chmod -R a+rX $TMP
chmod -R ug+rwX $TMP

msgok "Build finished; result is in directory: %s" $TMP
