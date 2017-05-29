#
# Wikimedia Jahresbericht 2016
#
# Copyright (c) 2017 Atelier Disko - All rights reserved.
#
# Use of this source code is governed by the AGPL v3
# license that can be found in the LICENSE file.
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


