#
# deta
#
# Copyright (c) 2011 David Persson
#
# Distributed under the terms of the MIT License.
# Redistributions of files must retain the above copyright notice.
#

msginfo "Module %s loaded." "invoke"

# @FUNCTION: run_ssh
# @USAGE: <host> < <commands>
# @DESCRIPTION:
# Executes commands from STDIN on a remote host.
# This function has DRYRUN support.
run_ssh() {
	local in=""
	while read -r line; do in+="$line\n"; done

	if [ $DRYRUN != "n" ]; then
		msgdry "Would have executed following command/s on %s." $1
		echo -e $in
	else
		msg "Begin executing command/s on %s." $1
		echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>"
		echo -e $in | ssh -T $1
		echo "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<"
		msgok "Finished executing command/s on %s." $1
	fi
}
