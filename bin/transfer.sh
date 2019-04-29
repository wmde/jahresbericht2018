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

DRY_RUN="n"
if [[ $# == 1 ]] && [[ $1 == "--dry-run" ]]; then
	DRY_RUN="y"
	echo "Enabled dry run mode in $0."
else
	echo "Dry run mode disabled in $0!"
fi

# https://web.archive.org/web/20100526030004/http://mywiki.wooledge.org/BashFAQ/050#How_to_add_testing_capability_to_a_programs
run() { if [[ $DRY_RUN == "y" ]]; then echo "DRY RUN: $*"; else eval "$@"; fi }
msg() { if [[ $DRY_RUN == "y" ]]; then echo "DRY RUN: $@"; else echo "$@"; fi }

source Deployfile
# Be careful sourcing Envfile after Deployfile, as it may override
# common vars which have a different meaning in BASH, i.e. PATH.

# Remember as we will later switch into build directory and still
# may need to access the source path for i.e. log files.
SOURCE_PATH=$(pwd)

if [[ $TRANSFER_METHOD == "manual" ]]; then
	BUILD_FILE=/tmp/transfer_$(basename $SOURCE_PATH)_$(date +%Y-%m-%d-%H-%M).tar.gz

	run "tar cvfz $BUILD_FILE *"

	msg "Transfer method 'manual' was selected. An archive is available at:"
	msg $BUILD_FILE
	msg
	msg "Targets are:"
	for H in $TARGET_HOSTS; do
		msg "${TARGET_USER}@${H}:${TARGET_PATH}"
	done
	exit 0
fi

if [[ $TRANSFER_METHOD == "ssh+rsync" ]]; then
	for H in $TARGET_HOSTS; do
		msg ">>>>>>>>>>>>>>>>>>>>>>>>>>>>> ${TARGET_USER}@${H}:${TARGET_PATH}"

		if [[ $DRY_RUN == "y" ]]; then
			rsync --stats -h -z -r \
				--rsh "ssh -p ${TARGET_PORT}" \
				--delete \
				--exclude=$(echo ${TRANSFER_IGNORE} | sed  's/ / --exclude=/g') \
				--links \
				--times \
				--verbose \
				--itemize-changes \
				--dry-run \
				./ ${TARGET_USER}@${H}:${TARGET_PATH} | tee /tmp/rsync.log
		else
			rsync --stats -h -z -r \
					--rsh "ssh -p ${TARGET_PORT}" \
					--delete \
					--exclude=$(echo ${TRANSFER_IGNORE} | sed  's/ / --exclude=/g') \
					--links \
					--times \
					--verbose \
					--itemize-changes \
					./ ${TARGET_USER}@${H}:${TARGET_PATH} | tee /tmp/rsync.log
		fi
		echo

		grep '^c' /tmp/rsync.log > /tmp/rsync.log.created || true
		grep -E '^<[a-z]+.*[a-z\?].*' /tmp/rsync.log  > /tmp/rsync.log.changed || true
		grep 'deleting' /tmp/rsync.log  > /tmp/rsync.log.deleted || true

		echo
		msg "Files created:"
		cat /tmp/rsync.log.created
		echo
		msg "Files changed:"
		cat /tmp/rsync.log.changed
		echo
		msg "Files deleted:"
		cat /tmp/rsync.log.deleted
		echo

		msg "Total files created: $(wc -l /tmp/rsync.log.created | awk '{ print $1 }')"
		msg "Total files changed: $(wc -l /tmp/rsync.log.changed | awk '{ print $1 }')"
		msg "Total files deleted: $(wc -l /tmp/rsync.log.deleted | awk '{ print $1 }')"
		echo

		rm /tmp/rsync.log*
		msg "<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ${TARGET_USER}@${H}:${TARGET_PATH} "
	done
fi
