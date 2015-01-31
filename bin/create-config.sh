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

FILES+=" nginx/includes/app"
FILES+=" nginx/includes/assets"
FILES+=" nginx/includes/media"
FILES+=" nginx/includes/access"

FILES+=" nginx/servers/app"
msgok "Building for logrotate."
FILES+=" logrotate"

msg "Generating configurations from templates..."
cd $THIS_PATH/config
for N in $FILES; do
	cp $N.conf{.default,}
	fill __NAME__ $THIS_NAME ${N}.conf
	fill __PATH__ $THIS_PATH ${N}.conf
	fill __DOMAIN__ $THIS_DOMAIN ${N}.conf
	fill __VERSION__ $VERSION ${N}.conf
	fill __CONTEXT__ $THIS_CONTEXT ${N}.conf
	fill __NGINX_REOPEN_LOGFILES__ "$THIS_NGINX_REOPEN_LOGFILES" ${N}
done
cd -

msgok "Completed creating configuration files."
