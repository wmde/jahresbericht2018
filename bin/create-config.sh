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

role THIS

cd  $THIS_PATH/config/nginx/includes
for N in app assets access; do
	msg "Generating includes configuration from templates for ${N}..."

	cp $N.conf{.default,}
	fill __PATH__ $THIS_PATH ${N}.conf
	fill __DOMAIN__ $THIS_DOMAIN ${N}.conf
done
cd -

cd $THIS_PATH/config/nginx/servers
for N in app; do
	msg "Generating servers configuration from templates for ${N}..."

	cp $N.conf{.default,}
	fill __PATH__ $THIS_PATH ${N}.conf
	fill __DOMAIN__ $THIS_DOMAIN ${N}.conf
	fill __VERSION__ $VERSION ${N}.conf
	fill __NAME__ $THIS_NAME ${N}.conf
	fill __CONTEXT__ $THIS_CONTEXT ${N}.conf
done
cd -

cd $THIS_PATH/config
for N in logrotate.conf; do
	msg "Generating configuration from templates for ${N}..."

	cp $N{.default,}
	fill __PATH__ $THIS_PATH $N
	fill __DOMAIN__ $THIS_DOMAIN $N
	fill __USER__ $THIS_USER $N
	fill __NAME__ $THIS_NAME ${N}
	fill __CONTEXT__ $THIS_CONTEXT ${N}
	fill __NGINX_REOPEN_LOGFILES__ "$THIS_NGINX_REOPEN_LOGFILES" ${N}
done
cd -


