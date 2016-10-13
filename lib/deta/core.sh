#
# deta
#
# Copyright (c) 2011 David Persson
#
# Distributed under the terms of the MIT License.
# Redistributions of files must retain the above copyright notice.
#

# @FUNCTION: msg*
# @USAGE: <message> [replacement0..]
# @DESCRIPTION:
# Outputs status messages honoring QUIET flag.
msg()       { if [[ $QUIET != "y" ]];   then _msg ""     "$@"; fi }
msginfo()   { if [[ $VERBOSE != "n" ]]; then _msg ""     "$@"; fi }
msgok()     { if [[ $QUIET != "y" ]];   then _msg "ok"   "$@"; fi }
msgskip()   { if [[ $QUIET != "y" ]];   then _msg "skip" "$@"; fi }
msgdry()    { if [[ $QUIET != "y" ]];   then _msg "dry"  "$@"; fi }
msgwarn()   { _msg "warn" "$@" >&2; }
msgfail()   { _msg "fail" "$@" >&2; }

# @FUNCTION: _msg
# @USAGE: <status> <message> [replacement0..]
# @DESCRIPTION:
# Outputs status messages.
_msg() {
	local status=$1
	local message=$2
	shift 2

	local IFS=""
	printf "[\e[1;34m%s\e[0m] [%5s] \e[1;32m%s\e[0m\n" \
		"$(date +%T)" \
		"$status" \
		"$(printf "$message" $@)"
}

msginfo "Module %s loaded." "core"

# @FUNCTION: role
# @USAGE: <role>
# @DESCRIPTION:
# The magic role "THIS" will always be mapped using the current
# wnvironment context. For all other roles the user is prompted
# to select from the available environments.
role() {
	local role=$(echo $1 | tr '[:upper:]' '[:lower:]')

	if [[ $role != "this" ]]; then
		msgfail "No support for any other role than THIS anymore; role %s was given" $role
		exit 1
	fi
	_env_to_role
	msgok "Using role %s." $role
}

# @FUNCTION: _env_to_role
# @DESCRIPTION:
# Maps an env (left) to role provided to this function (right).
_env_to_role() {
	local tmp=$(mktemp -t deta.XXX)

	perl -pe "s/^([a-zA-Z0-9_]+)=/$(echo "THIS" | tr '[:lower:]' '[:upper:]')_\1=/g" $CONFIG_FILE > $tmp
	source $tmp
	msgok "Mapped Envfile to role THIS." $@

	rm $tmp
}

# @FUNCTION: dry
# @DESCRIPTION:
# Checks if dryrun is enabled and displays warning message.
dry() {
	if [[ $DRYRUN != "y" ]]; then
		msgwarn "Dry run is NOT enabled! Press STRG+C to abort."
		msg "Starting in 3 seconds."
		echo -n "  "
		for I in {1..3}; do
			echo -n '.'
			sleep 1
		done
		echo
	fi
}

# @VARIABLE DEFERRED
# @DESCRIPTION
# Used within defer() and _defer() functions as a
# stack. Don't access directly.
DEFERRED=()

# @FUNCTION: defer
# @USAGE: <command>
# @DESCRIPTION:
# Queues given command to execute it later. Registers
# handler first time it is used.
defer() {
	if [[ -z ${DEFERRED-} ]]; then
		msginfo "Trapping %s signal." "EXIT"
		trap _defer EXIT
	fi
	DEFERRED[${#DEFERRED[*]}]=$@
}

# @FUNCTION: _defer
# @DESCRIPTION:
# Supposed to be registered as a handler for trapping EXIT
# signals. Executes commands on DEFERRED stack.
_defer() {
	for command in "${DEFERRED[@]}"; do
		msg "Executing %s." "$command"
		eval $command
	done
}

# Directory which holds the cached items. Will be created
# if it doesn't exist.
DETA_CACHE_DIR=${DETA_CACHE_DIR:-"/tmp/deta_cache"}

if [[ ! -d $DETA_CACHE_DIR ]]; then
	mkdir -p $DETA_CACHE_DIR
	msgok "Initialized internal cache directory %s." $DETA_CACHE_DIR
fi

# @FUNCTION: _cache_exists
# @USAGE: <key>
# @DESCRIPTION:
# Checks if a chached item is available under the given
# key. Will echo "true" or "false" depending on availability.
_cache_exists() {
	local key=$1

	if [[ -f $DETA_CACHE_DIR/$key ]]; then
		echo "y"
	else
		echo "n"
	fi
}

# @FUNCTION: _cache_read_into_file
# @USAGE: <key> <target>
# @DESCRIPTION:
# Will read a cached item and copy its contents
# into a provided file.
_cache_read_into_file() {
	local key=$1
	local target=$2

	cp $DETA_CACHE_DIR/$key $target
}

# @FUNCTION: _cache_write_from_file
# @USAGE: <key> <source>
# @DESCRIPTION:
# Will write a cached item using the provided file's contents.
_cache_write_from_file() {
	local key=$1
	local source=$2

	cp $source $DETA_CACHE_DIR/$key
}

if [[ $(which md5 2>/dev/null || true) != "" ]]; then
	HAS_BSD_MD5="y"
else
	HAS_BSD_MD5="n"
fi

_calc_md5() {
	if [[ $HAS_BSD_MD5 == "y" ]]; then
		echo $1 | md5
	else
		echo $1 | md5sum | cut -d " " -f1
	fi
}

_calc_md5_file() {
	if [[ $HAS_BSD_MD5 == "y" ]]; then
		md5 -q $@ | md5
	else
		md5sum $@ | md5sum | cut -d " " -f1
	fi
}

