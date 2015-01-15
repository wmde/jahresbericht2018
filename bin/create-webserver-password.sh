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

msg "Creating webserver password file (hash algo is MD5)."
read -p "User: " USER
read -p "Password " PASSWORD

htpasswd -bc $THIS_PATH/config/nginx/password $USER $PASSWORD
