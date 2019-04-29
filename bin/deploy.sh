#!/bin/bash
#
# Wikimedia Jahresbericht 2018
#
# Copyright (c) 2017 Atelier Disko - All rights reserved.
#
# Use of this source code is governed by the AGPL v3
# license that can be found in the LICENSE file.

set -o nounset
set -o errexit
set -o pipefail

# Must be executed from the project root (where Envfile is located).
[[ ! -f Envfile ]] && echo "error: not invoked from project root" && exit 1

DRY_RUN="y"
if [[ $# == 1 ]] && [[ $1 == "--dry-run" ]]; then
	echo "Enabled dry run mode in $0."
else
	DRY_RUN="n"
	echo "Dry run mode disabled in $0!"
fi

SHARED_FLAGS=" "
if [[ $DRY_RUN != "n" ]]; then
	SHARED_FLAGS+="--dry-run"
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
function cleanup { rm -rf $TMP; }
trap cleanup EXIT

git clone --verbose --single-branch --recursive --no-hardlinks \
	--branch $(git rev-parse --abbrev-ref HEAD) \
	$SOURCE_PATH $TMP

cd $TMP

bin/set-version.sh$SHARED_FLAGS

if [[ $DRY_RUN != "n" ]]; then
	echo "DRY RUN: Skipping build phase."
else
	docker run --rm -it \
		--user $UID \
		--mount type=bind,source="$(dirname ${SSH_AUTH_SOCK})",target=$(dirname ${SSH_AUTH_SOCK}) \
		--mount type=bind,source="${HOME}/.composer",target=/composer \
		--mount type=bind,source="${TMP}",target=/built \
		--env SSH_AUTH_SOCK=${SSH_AUTH_SOCK} \
		--env COMPOSER_HOME=/composer \
		${BUILD_CONTAINER} \
		/bin/sh -c 'cd built && bin/build.sh'
fi

if [[ $DRY_RUN != "n" ]]; then
	bin/pre-transfer-commands.sh$SHARED_FLAGS
	bin/transfer.sh$SHARED_FLAGS
	bin/post-transfer-commands.sh$SHARED_FLAGS
else
	bin/pre-transfer-commands.sh --dry-run
	bin/transfer.sh --dry-run
	bin/post-transfer-commands.sh --dry-run

	read -p "Looks good? (y/N) " continue
	if [[ $continue != "y" ]]; then
		echo "Cancelled transfer phase."
		exit 1
	fi

	bin/pre-transfer-commands.sh
	bin/transfer.sh
	bin/post-transfer-commands.sh
fi

if [[ $SLACK_WEBHOOK_URL != "" ]]; then
	if [[ $DRY_RUN == "y" ]]; then
		JSON="{
			\"text\": \"Deployed project *$(basename $(pwd))* (v$(cat $TMP/VERSION.txt)) successfully to ${TARGET_HOSTS// /, } without any errors.\"
		}"
		echo -n "Sending Slack notification..."
		curl -s -S -X POST -H 'Content-type: application/json' --data "$JSON" $SLACK_WEBHOOK_URL
		echo
	else
		echo "DRY RUN: Skipping Slack notification."
	fi
fi

if [[ $DRY_RUN == "n" ]]; then
	echo "Deployment finished without an error."
	echo "It's now: $(date -u +%T) UTC"else
fi
