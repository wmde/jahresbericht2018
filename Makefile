#
# Wikimedia Jahresbericht 2017
#
# Copyright (c) 2017 Atelier Disko - All rights reserved.
#
# Use of this source code is governed by the AGPL v3
# license that can be found in the LICENSE file.
#

NAME ?= $(shell basename $(CURDIR))
DOMAIN ?= $(subst _,-,$(NAME)).test

# Used when building the project, allowed to be overwritten, so external scripts
# may pick a unique or simply different location where they want to process
# the build for themselves without the possibility it being touched by other
# processes.
BUILD_PATH ?= /tmp/build

# Base path for assets, here to make it easy to change.
ASSETS_PATH = assets

# -- Integrator/Creator --

.PHONY: install
install: prefill

.PHONY: prefill
prefill: 
	sed -i -e "s|__NAME__|$(NAME)|g" Hoifile Envfile Deployfile
	sed -i -e "s|__DOMAIN__|$(DOMAIN)|g" Hoifile Envfile
	sed -i -e "s|__SECRET_BASE__|$(SECRET_BASE)|g" Envfile
	# Some sed leave stray files.
	rm -f Hoifile-e Envfile-e Deployfile-e

# -- Utilities --

.PHONY: fix-perms
fix-perms:
	chmod -R a+rwX tmp log media media_versions

# -- Dist --

# Prepares a copy of the project for distribution under /tmp/dist. When updating
# run dist-clean first.
dist: 
	git clone --verbose --single-branch --recursive --no-hardlinks \
		--branch $(shell git rev-parse --abbrev-ref HEAD) \
		$(CURDIR) $(BUILD_PATH)
	cd $(BUILD_PATH) && bin/build.sh

.PHONY: dist-clean
dist-clean:
	rm -fr $(BUILD_PATH)

# -- Maintainer --

.PHONY: update-assets
update-assets:
	curl https://raw.githubusercontent.com/necolas/normalize.css/master/normalize.css > $(ASSETS_PATH)/css/normalize.css
	curl https://code.jquery.com/jquery-3.2.1.js > $(ASSETS_PATH)/js/jquery.js
	curl http://requirejs.org/docs/release/2.3.2/comments/require.js > $(ASSETS_PATH)/js/require.js
	curl https://raw.githubusercontent.com/requirejs/domReady/latest/domReady.js > $(ASSETS_PATH)/js/require/domready.js
	curl http://underscorejs.org/underscore.js > $(ASSETS_PATH)/js/underscore.js
	curl -L https://raw.githubusercontent.com/zloirock/core-js/master/client/shim.js > $(ASSETS_PATH)/js/compat/core.js
