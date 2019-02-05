#!/bin/bash
#
# Copyright 2018 Atelier Disko. All rights reserved.
#
# Use of this source code is governed by the AD General Software
# License v1 that can be found under https://atelierdisko.de/licenses
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.

set -o nounset
set -o errexit
set -o pipefail

if [[ -d .git ]]; then
	echo "Adding revision build tag..."
	revision=$(git rev-parse --short HEAD)

	# The VERSION file may contain multiple lines, and a trailing newline at the end
	# of the file, that we want to preserve. Thus we cannot simply append via echo >>.

	# There may already be build tags or not. Multiple build tags are separated
	# by a dot.
	if head -n1 VERSION.txt | grep -q '+'; then
		sed -i -e "1 s|$|.${revision}|g" VERSION.txt
	else
		sed -i -e "1 s|$|+${revision}|g" VERSION.txt
	fi

	# Workaround for older BSD versions of sed that need
	# a suffix after -i while interpreting -e as the suffix.
	[[ -f VERSION.txt-e ]] && rm VERSION.txt-e
fi

exit 0
