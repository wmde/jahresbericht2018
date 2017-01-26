#!/bin/bash
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

# Must be executed from the project root (where Envfile is located).
[[ ! -f Envfile ]] && echo "error: not invoked from project root" && exit 1

ASSUME_YES="n"
if [[ $# == 1 ]] && [[ $1 == "--yes" ]]; then
	ASSUME_YES="y"
fi

source Deployfile
# Be careful sourcing Envfile after Deployfile, as it may override
# common vars which have a different meaning in BASH, i.e. PATH.

# Remember as we will later switch into build directory and still
# may need to access the source path for i.e. log files.
SOURCE_PATH=$(pwd)

# For each deployment we'll use a unique build directory, to allow
# parallel deployments i.e. of prod and stage branches.
TMP=$(mktemp -d -t deploy.XXXX)
DISTOUT=$(mktemp -t deploy.XXXX.dist.out)

# This is the entire build phase.
git clone --verbose --single-branch --recursive --no-hardlinks \
	--branch $(git rev-parse --abbrev-ref HEAD) \
	$SOURCE_PATH $TMP
cd $TMP
bin/build.sh 2>&1 | tee $DISTOUT

if [[ $TRANSFER_METHOD == "manual" ]]; then
	BUILD_FILE=$TMP/${NAME}_$(date +%Y-%m-%d-%H-%M).tar.gz
	tar cvfz $BUILD_FILE *

	printf "Transfer method 'manual' was selected, to finalize the deployment you must\n"
	printf "now copy the files yourself. Archive is available at:\n -> %s\n" $BUILD_FILE

	if [[ $POST_TRANSFER_COMMANDS != "" ]]; then
		echo "Do not have SSH. You must execute these commands on target host/s manually:"
		echo $POST_TRANSFER_COMMANDS
	fi

elif [[ $TRANSFER_METHOD == "ssh+rsync" ]]; then
	# 1. grep may not match anything at all.
	# 2. rsync may fail to set times (this is non-critical)
	# set +o errexit
	for H in $TARGET_HOSTS; do
		if [[ $ASSUME_YES != "y" ]]; then
			out=$(
				rsync --stats -h -z -p -r --delete \
					--exclude=$(echo $TRANSFER_IGNORE | sed  's/ / --exclude=/g') \
					--links \
					--times \
					--verbose \
					--itemize-changes \
					--dry-run \
					${TMP}/ ${TARGET_USER}@${H}:${TARGET_PATH}
			)
			echo "To be created on target:"
			echo "$out" | grep '^c'
			echo
			echo "To be changed on target:"
			echo "$out" | grep -E '^<[a-z]+.*[a-z\?].*'
			echo
			echo "To be deleted on target:"
			echo "$out" | grep deleting
			echo
			read -p "[$(date +%T)] looks good? (y/N) " continue
			if [[ $continue != "y" ]]; then
				return 1
			fi
		fi
		rsync --stats -h -z -p -r --delete \
				--exclude=$(echo $TRANSFER_IGNORE | sed  's/ / --exclude=/g') \
				--links \
				--times \
				--verbose \
				--itemize-changes \
				${TMP}/ ${TARGET_USER}@${H}:${TARGET_PATH}
	done

	if [[ $POST_TRANSFER_COMMANDS != "" ]]; then
		for H in $TARGET_HOSTS; do
			echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ${H}"
			ssh -T ${TARGET_USER}@${H} cd $TARGET_PATH && $POST_TRANSFER_COMMANDS
			echo "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ${H}"
		done
	fi
	# set -o errexit
else
	echo "error: invalid transfer method"
	exit 1
fi

if [[ $SLACK_WEBHOOK_URL != "" ]]; then
	read -r -d '' JSON <<EOD
	{
		"text": "$(whoami) deployed *$(basename pwd)* v$(cat VERSION.txt) to ${TARGET_HOST}",
		"attachments": [
			{
				"fallback": "Output of build step.",
				"author_name": "make dist",
				"title": "Combined output of build step.",
				"text": "$(cat $DISTOUT | sed 's/\\/\\\\/g' | sed 's/"/\\"/g' | sed "s/'/\\'/g")"
			}
		]
	}
EOD
	curl -s -S -X POST -H 'Content-type: application/json' --data $JSON $SLACK_WEBHOOK_URL
fi

rm $DISTOUT
rm -rf $TMP
echo "[$(date +%T)] deployment finished"
