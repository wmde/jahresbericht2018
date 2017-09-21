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
DOMAIN ?= $(subst _,-,$(NAME)).test

ASSETS_PATH = assets

BUILD_PATH=/tmp/build

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

# -- Integrator/Creator --

# Initializes a freshly cloned project. Must be run only once. 
.PHONY: init
init: 
	sed -i -e "s|__NAME__|$(NAME)|g" Envfile Hoifile Deployfile
	sed -i -e "s|__DOMAIN__|$(DOMAIN)|g" Envfile Hoifile
	rm -f Deployfile-e Envfile-e Hoifile-e # older BSDs leave stray files

# -- Maintainer --

.PHONY: update-assets
update-assets:
	curl https://raw.githubusercontent.com/necolas/normalize.css/master/normalize.css > $(ASSETS_PATH)/css/normalize.css
	curl https://code.jquery.com/jquery-3.2.1.js > $(ASSETS_PATH)/js/jquery.js
	curl http://requirejs.org/docs/release/2.3.2/comments/require.js > $(ASSETS_PATH)/js/require.js
	curl https://raw.githubusercontent.com/requirejs/domReady/latest/domReady.js > $(ASSETS_PATH)/js/require/domready.js
	curl http://underscorejs.org/underscore.js > $(ASSETS_PATH)/js/underscore.js
