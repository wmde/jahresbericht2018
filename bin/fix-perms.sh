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

role THIS

set +o errexit

chmod -R a+rwX $THIS_PATH/app/resources/tmp
chmod -R a+rwX $THIS_PATH/log

chmod -R a+rwX $THIS_PATH/media
chmod -R a+rwX $THIS_PATH/media_versions

# Enable once target allows sudo.
# msg "Fixing permissions on config/logrotate.conf..."
# chmod 0640 $THIS_PATH/config/logrotate.conf
# sudo chown root $THIS_PATH/config/logrotate.conf

# find $THIS_PATH/app/resources/tmp -type f -exec chmod -f 0666 {} \;
# find $THIS_PATH/app/resources/tmp -type d -exec chmod -f 0777 {} \;

