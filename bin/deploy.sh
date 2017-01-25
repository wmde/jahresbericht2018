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

source Deployfile
# be careful sourcing Envfile after Deployfile, as it may override
# certain vars.

TMP=$(mktemp -d -t deploy.XXXX)
defer rm -rf $TMP

BUILD_PATH=$TMP make dist
cd $TMP

if [[ $METHOD == "ssh+rsync" ]]; then
	# 1. grep may not match anything at all.
	# 2. rsync may fail to set times (this is non-critical)
	set +o errexit

	out=$(
		rsync --stats -h -z -p -r --delete \
			--exclude$(echo $IGNORE | tr ' ' ' --exclude=') \
			--links \
			--times \
			--verbose \
			--itemize-changes \
			--dry-run \ # added for dry-run
			${TMP}/ ${USER}@${HOST}:${PATH}
	)
	echo "To be changed on target:"
	echo "$out" | grep -E '^<[a-z]+.*[a-z\?].*'
	echo
	echo "To be deleted on target:"
	echo "$out" | grep deleting
	echo
	echo "To be created on target:"
	echo "$out" | grep '^c'
	echo
	read -p "Looks good? (y/N) " continue
	if [[ $continue != "y" ]]; then
		return 1
	fi

	rsync --stats -h -z -p -r --delete \
			--exclude$(echo $IGNORE | tr ' ' ' --exclude=') \
			--links \
			--times \
			--verbose \
			--itemize-changes \
			${TMP}/ ${USER}@${HOST}:${PATH}

	set -o errexit
fi
if [[ $TRANSFER_METHOD == "manual" ]]; then
	BUILD_FILE=$TMP/${NAME}_$(date +%Y-%m-%d-%H-%M).tar.gz
	cd $TMP
	tar cvfz $BUILD_FILE *
	cd -
	printf "Transfer method 'manual' was selected, to finalize the deployment you must\n"
	printf "now copy the files yourself. Archive is available at:\n -> %s\n" $BUILD_FILE
fi
if [[ $TRANSFER_METHOD == ssh* ]]; then
	echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ${HOST}"
	ssh -T ${USER}@${HOST} <<-SESSION
		echo 'Telling hoi to load the project...'
		sudo hoictl --project=${PATH} load
	SESSION
	echo "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ${HOST}"
else
	echo "Do not have SSH. You must execute commands on target manually."
fi

cd -

MESSAGE="$(whoami) deployed *$(basename pwd)* v$(cat $TMP/VERSION.txt) to ${HOST}"
curl -s -S -X POST \
	--data-urlencode "payload={\"text\": \"${MESSAGE}\"}" \
	https://hooks.slack.com/services/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
