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

source $DETA/transfer.sh
source $DETA/invoke.sh
source $DETA/util.sh
source $DETA/g11n.sh
source $DETA/asset.sh
source $DETA/vcs.sh

role THIS
SOURCE_PATH=$(dirname $(pwd)) # we execute in bin/
TMP=$(mktemp -d -t deta.XXXX)
defer rm -rf $TMP

BRANCH=$(git_current_branch)
msgwarn "Selected branch %s!" $BRANCH

msg "Preparing build stage..."

msg "Cloning repository..."
git clone --verbose --single-branch --recursive --branch $BRANCH file://$SOURCE_PATH $TMP

msg "Determing versions...."

REV_HEAD=$(git_rev_for HEAD)
TAG_DEPLOYED="deployed-${BRANCH}"

if [[ $(git_has $TAG_DEPLOYED) == "y" ]]; then
	INITIAL_DEPLOYMENT="n"
	REV_DEPLOYED=$(git_rev_for $TAG_DEPLOYED)

	msgok "Found deployed tag; using %s." $REV_DEPLOYED
else
	INITIAL_DEPLOYMENT="y"
	REV_DEPLOYED=$(git_first_commit)

	msgwarn "Intitial deployment."
	msgwarn "No tag found; using first commit %s." $REV_DEPLOYED
fi

msg "Changes since %s to-be-deployed:" $REV_DEPLOYED
git --no-pager log --oneline ${REV_DEPLOYED}..
echo
git --no-pager diff --shortstat $REV_DEPLOYED
echo

msg "Will enter build stage."
dry

#
# Continue build
#
msg "Entering build stage..."

# Version
fill "__VERSION_BUILD__" "$REV_HEAD" $TMP/Envfile
fill "__PROJECT_VERSION_BUILD__" "$REV_HEAD" $TMP/assets/css/base.css

# Assets pipeline
# yui does not work with jquery 2.2
# https://github.com/yui/yuicompressor/issues/234
COMPRESSOR_JS="yuicompressor"
COMPRESSOR_CSS="yuicompressor"

for FILE in $(find $TMP -iregex '.*/assets/.*\.css'); do
	myth $FILE $FILE
	msgok "Myth processed %s." $FILE
done

for FILE in $(find $TMP -iregex '.*/assets/.*\.js'); do
	compress_js $FILE $FILE
done

for FILE in $(find $TMP -iregex '.*/assets/.*\.css'); do
	compress_css $FILE $FILE
done

for FILE in $(find $TMP -iregex '.*/assets/.*\.png'); do
	compress_img $FILE $FILE
done
#	for FILE in $(find $TMP -iregex '.*/assets/.*\.jpg'); do
#		compress_img $FILE $FILE
#	done

vcs_clear $TMP

msg "Fixing group permissions..."
chmod -R a+rX $TMP
chmod -R ug+rwX $TMP

#
# Transfer
#
msg "Entering transfer stage..."
if [[ $THIS_TRANSFER_METHOD == "ssh+rsync" ]]; then
	sync_sanity $TMP/ $THIS_USER@$THIS_HOST:$THIS_PATH "$THIS_TRANSFER_IGNORE"
	set +o errexit
	sync $TMP/ $THIS_USER@$THIS_HOST:$THIS_PATH "$THIS_TRANSFER_IGNORE"
	set -o errexit
fi
if [[ $THIS_TRANSFER_METHOD == "manual" ]]; then
	BUILD_FILE=$TMP/${THIS_NAME}_$(date +%Y-%m-%d-%H-%M).tar.gz
	msg "Creating build file %s..." $BUILD_FILE
	cd $TMP
	tar cvfz $BUILD_FILE *
	cd -
	msginfo "Transfer method 'manual' was selected, to finalize the deployment you must"
	msginfo "now copy the files yourself. Archive is available at:\n -> %s" $BUILD_FILE
fi
if [[ $THIS_TRANSFER_METHOD == ssh* ]]; then
	run_ssh $THIS_USER@$THIS_HOST <<-SESSION
		echo 'Telling hoi to load the project...'
		sudo hoictl --project=$THIS_PATH load
	SESSION
else
	msginfo "Do not have SSH. You must execute commands on target manually."
fi

#
# Post-Deploy
#
msg "Entering post-deploy stage..."

# Finalize
cd $SOURCE_PATH
msg "Tagging revision %s as deployed." $REV_HEAD
git tag -f $TAG_DEPLOYED $REV_HEAD
cd -

msg "Sending notification to slack."
MESSAGE="Deployed *${THIS_NAME}* at revision ${REV_HEAD} by $(whoami) to <http://${THIS_DOMAIN}|${THIS_CONTEXT}>."
curl -s -S -X POST \
	--data-urlencode "payload={\"text\": \"${MESSAGE}\"}" \
	https://hooks.slack.com/services/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
