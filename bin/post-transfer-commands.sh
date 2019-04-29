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

run() { if [[ $DRY_RUN == "y" ]]; then echo "DRY RUN: $*"; else eval "$@"; fi }
msg() { if [[ $DRY_RUN == "y" ]]; then echo "DRY RUN: $@"; else echo "$@"; fi }

source Deployfile
# Be careful sourcing Envfile after Deployfile, as it may override
# common vars which have a different meaning in BASH, i.e. PATH.

if [[ $POST_TRANSFER_COMMANDS == "" ]]; then
	echo "Nothing to do, no post transfer commands configured."
	exit 0
fi

if [[ $TRANSFER_METHOD == "ssh"* ]]; then
	for H in $TARGET_HOSTS; do
		msg ">>>>>>>>>>>>>>>>>>>>>>>>>>>>> ${TARGET_USER}@${H}:${TARGET_PATH}"
		run "ssh -p ${TARGET_PORT} -T ${TARGET_USER}@${H} \"cd ${TARGET_PATH} && ${POST_TRANSFER_COMMANDS}\""
		msg "<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ${TARGET_USER}@${H}:${TARGET_PATH} "
	done
else
	msg "Do not have SSH to execute transfer commands remotely."
	msg "Please run the following commands manually on the remote hosts:"
	msg "${POST_TRANSFER_COMMANDS}"
	msg
	msg "Targets are:"
	for H in $TARGET_HOSTS; do
		msg "${TARGET_USER}@${H}:${TARGET_PATH}"
	done
fi
