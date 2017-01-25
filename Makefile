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

NAME ?= $(shell basename $(CURDIR))
DOMAIN ?= $(subst _,-,$(NAME)).dev

ASSETS_PATH = app/assets

BUILD_PATH=/tmp/build

# Initializes a freshly cloned project. Must be run only once. 
.PHONY: init
init: 
	sed -i -e "s|__NAME__|$(NAME)|g" Envfile Hoifile Deployfile
	sed -i -e "s|__DOMAIN__|$(DOMAIN)|g" Envfile Hoifile
	rm -f Deployfile-e Envfile-e Hoifile-e # older BSDs leave stray files

# -- Dist --

# Prepares a copy of the project for distribution under /tmp/dist. When updating
# run dist-clean first.
dist: $(BUILD_PATH)
	git clone --verbose --single-branch --recursive --no-hardlinks \ 
		--branch $(git rev-parse --abbrev-ref HEAD) \
		$(CURDIR) $(BUILD_PATH)
	cd $(BUILD_PATH) && bin/build.sh

.PHONY:
dist-clean:
	rm -fr $(BUILD_PATH)


