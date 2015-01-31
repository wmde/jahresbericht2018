#
# Atelier Disko Distribution
#
# Copyright (c) 2013-2015 Atelier Disko - All rights reserved.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#

source $DETA/util.sh

role THIS

# All files will be based on $THIS_PATH/config later.
FILES=""

FILES+=" nginx/includes/app.conf"
FILES+=" nginx/includes/assets.conf"
FILES+=" nginx/includes/access.conf"

FILES+=" nginx/servers/app.conf"
msgok "Building for logrotate."
FILES+=" logrotate.conf"

msg "Generating configurations from templates..."
cd $THIS_PATH/config
for N in $FILES; do
	SOURCE=$N.default
	TARGET=$(dirname $N)/$(basename -s .default $SOURCE)

	msg "%s -> %s" $SOURCE $TARGET
	cp -v $SOURCE $TARGET

	fill __NAME__ $THIS_NAME $TARGET
	fill __PATH__ $THIS_PATH $TARGET
	fill __DOMAIN__ $THIS_DOMAIN $TARGET
	fill __VERSION__ $VERSION $TARGET
	fill __CONTEXT__ $THIS_CONTEXT $TARGET
	fill __NGINX_REOPEN_LOGFILES__ "$THIS_NGINX_REOPEN_LOGFILES" $TARGET
done
cd -

msgok "Completed creating configuration files."
