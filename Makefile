# Copyright 2014 David Persson. All rights reserved.
# Copyright 2017 Atelier Disko. All rights reserved.
#
# Licensed under the AD General Software License v1.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#
# You should have received a copy of the AD General Software
# License. If not, see https://atelierdisko.de/licenses.

NAME ?= $(shell basename $(CURDIR))
DOMAIN ?= $(subst _,-,$(NAME)).test

ASSETS_PATH = assets

# Used when building the project, allowd to be overwritten, so external scripts
# may pick a unique or simply differnent location where they want to process
# the build for themselves without the possibility it being touch from other
# processes.
BUILD_PATH ?= /tmp/build

# Base path for assets, here to make it easy to change..
ASSETS_PATH = app/assets

# Asset directories that need to be linked from modules.
MODULE_ASSETS_LINKS = $(patsubst %/,%,$(subst app/libraries/,assets/,$(dir $(shell find app/libraries -type d -name 'assets'))))

# These files will be checked for translatable strings. When they
# are modified strings will be re-extracted.
EXTRACT_SOURCES = $(shell bash -c "find app/{views,config,documents,models,controllers,extensions,mails} -name '*.php'")

# -- Integrator/Creator --

.PHONY: prefill
prefill: 
	sed -i -e "s|__NAME__|$(NAME)|g" Hoifile Envfile Deployfile
	sed -i -e "s|__DOMAIN__|$(DOMAIN)|g" Hoifile Envfile
	sed -i -e "s|__SECRET_BASE__|$(SECRET_BASE)|g" Envfile
	# Some sed leave stray files.
	rm -f Hoifile-e Envfile-e Deployfile-e

.PHONY: init
init: 

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

# Mozilla CA Bundle: To update use -B flag.
config/ssl/mozilla_ca_bundle.crt:
	perl bin/mk-ca-bundle.pl -u -v $@

# Thawte SSL123 CA Bundle: To update use -B flag.
config/ssl/thawte_ssl123_ca_bundle.pem: config/ssl/mozilla_ca_bundle.crt
	curl --cacert $< \
		https://search.thawte.com/library/VERISIGN/ALL_OTHER/thawte%20ca/SSL123_CA_Bundle.pem \
		-o config/ssl/thawte_ssl123_ca_bundle.pem

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
