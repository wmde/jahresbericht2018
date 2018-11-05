# Copyright 2014 David Persson. All rights reserved.
# Copyright 2017 Atelier Disko. All rights reserved.
#
# Use of this source code is governed by the AD General Software
# License v1 that can be found under https://atelierdisko.de/licenses
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.

include Envfile

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
	sed -i -e "s|__NAME__|$(shell basename $(CURDIR))|g" Hoifile Envfile Deployfile
	sed -i -e "s|__DOMAIN__|$(subst _,-,$(shell basename $(CURDIR))).test|g" Hoifile Envfile
	sed -i -e "s|__SECRET_BASE__|$(shell openssl rand -base64 60 | tr -d '\n')|g" Envfile
	sed -i -e "s|__DB_PASSWORD__||g" Hoifile Envfile 
	# Some sed leave stray files.
	rm -f Hoifile-e Envfile-e Deployfile-e

# -- Utilities --

.PHONY: fix-perms
fix-perms:
	chmod -R a+rwX tmp log media media_versions

# -- SSL Certificate Management --
# http://www.rackspace.com/knowledge_center/article/generate-a-csr-with-openssl

# Creates SHA2 CSR for requesting SSL cert. Will reuse existing key if present, else
# will generate a key. To generate a CSR for the FQDN example.com run:
# $ make config/ssl/example.com.csr
#
# To verify the generated CSR please read: 
# https://knowledge.verisign.de/support/ssl-certificates-support/index?vproductcat=V_C_S&page=content&actp=CROSSLINK&id=AR198
config/ssl/%.csr: config/ssl/%.key
	openssl req -new -sha256 -key $< -out $@

# Creates 2048bit KEY for SSL signing. We use seperate keys for each FQDN,
# this has better symmetry as it matches key<->csr. The FQDN is part of
# the filename. So in order to generate a key for example.com run: 
# $ make config/ssl/example.com.key
.PRECIOUS: config/ssl/%.key
config/ssl/%.key:
	openssl genrsa -out $@ 2048

# Create a bundled cert, suitable for NGINX.
config/ssl/%.crt: config/ssl/%.ca-bundle config/ssl/%.pure-crt
	cat config/ssl/$*.pure-crt config/ssl/$*.ca-bundle > $@

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
	curl -L https://raw.githubusercontent.com/necolas/normalize.css/master/normalize.css > $(ASSETS_PATH)/css/normalize.css
	curl -L http://requirejs.org/docs/release/2.3.2/comments/require.js > $(ASSETS_PATH)/js/require.js
	curl -L https://raw.githubusercontent.com/requirejs/domReady/latest/domReady.js > $(ASSETS_PATH)/js/require/domready.js
	curl -L http://underscorejs.org/underscore.js > $(ASSETS_PATH)/js/underscore.js
	curl -L https://raw.githubusercontent.com/zloirock/core-js/v2/client/shim.js > $(ASSETS_PATH)/js/compat/core.js

freeze-target-browsers:
	echo $(TARGET_BROWSERS) | tr '|' "\n" > .browserslist
	sed -i -e "s/TARGET_BROWSERS=.*/TARGET_BROWSERS=\"$(shell npx -q browserslist | tr "\n" '|')\"/g" Envfile
	rm .browserslist
	rm -f Envfile-e
