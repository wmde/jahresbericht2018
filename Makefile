# Wikimedia Jahresbericht 2018
#
# Copyright (c) 2017 Atelier Disko - All rights reserved.
#
# Use of this source code is governed by the AGPL v3
# license that can be found in the LICENSE file.
#


include Envfile
VERSION := $(subst __VERSION_BUILD__,$(shell git rev-parse --short HEAD),$(shell cat VERSION.txt))
VERSION_NOBUILD := $(subst +__VERSION_BUILD__,,$(shell cat VERSION.txt))

# Base path for assets, here to make it easy to change.
ASSETS_PATH := assets

# -- Initialization --

.PHONY: install
install: prefill fix-perms

# Special rule which initializes the Envfile (and other) we just included.
.PHONY: prefill
prefill: 
	sed -i -e "s|__NAME__|$(shell basename $(CURDIR))|g" Hoifile Envfile Deployfile
	sed -i -e "s|__DOMAIN__|$(subst _,-,$(shell basename $(CURDIR))).test|g" Hoifile Envfile
	sed -i -e "s|__SECRET_BASE__|$(shell openssl rand -base64 60 | tr -d '\n')|g" Envfile
	# Some sed leave stray files.
	rm -f Hoifile-e Envfile-e Deployfile-e

app/composer.lock:
	composer7.1 install -d app

.PHONY: fix-perms
fix-perms:
	chmod -R a+rwX tmp log

# -- Compatibility --

# Uses current target browser browserslist potentially relaitve definition and
# replaces it with an absolute definition.
freeze-target-browsers: \.browserslistrc
	sed -i -e "s/TARGET_BROWSERS=.*/TARGET_BROWSERS=\"$(shell npx -q browserslist | tr "\n" '|')\"/g" Envfile
	rm $<
	rm -f Envfile-e

\.browserslistrc:
	echo $(TARGET_BROWSERS) | tr '|' "\n" > $@

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

# -- Distribution --

.PHONY: update-assets
update-assets:
	curl -L https://raw.githubusercontent.com/necolas/normalize.css/master/normalize.css > $(ASSETS_PATH)/css/normalize.css
	curl -L http://requirejs.org/docs/release/2.3.2/comments/require.js > $(ASSETS_PATH)/js/require.js
	curl -L https://raw.githubusercontent.com/requirejs/domReady/latest/domReady.js > $(ASSETS_PATH)/js/require/domready.js
	curl -L http://underscorejs.org/underscore.js > $(ASSETS_PATH)/js/underscore.js
	curl -L https://raw.githubusercontent.com/zloirock/core-js/v2/client/shim.js > $(ASSETS_PATH)/js/compat/core.js
	curl -L https://github.com/github/fetch/releases/download/v3.0.0/fetch.umd.js > $(ASSETS_PATH)/js/compat/fetch.js
	curl -L https://raw.githubusercontent.com/iamdustan/smoothscroll/master/src/smoothscroll.js > $(ASSETS_PATH)/js/compat/scrollBehavior.js
	curl -L https://unpkg.com/react@16/umd/react.development.js > $(ASSETS_PATH)/js/react.js
	curl -L https://unpkg.com/react-dom@16/umd/react-dom.development.js > $(ASSETS_PATH)/js/react/dom.js
