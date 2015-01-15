#
# Atelier Disko Distribution
#
# Copyright (c) 2013-2014 Atelier Disko - All rights reserved.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#

# PREFIX ?= /usr/local
NAME ?= $(shell basename $(CURDIR))
USER ?= $(shell whoami)
_PATH ?= $(shell pwd)
UNAME := $(shell uname)

.PHONY: install
install: 
	git submodule update --init --recursive
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/david.env
	# USER already set in david.env
	sed -i -e "s|__PATH__|$(_PATH)|g" $(CURDIR)/config/david.env
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/vm.env
	# USER already set in vm.env
	sed -i -e "s|__PATH__|/vagrant/$(NAME)|g" $(CURDIR)/config/vm.env
	
	chmod -R a+rwX $(CURDIR)/log

.PHONY: install-deploy
install-deploy:
	ifeq ($(UNAME, Darwin))
		brew install node
		brew install yuicompressor
		brew install pngcrush
		# brew install jpegtran
		# brew install closure-compiler
	endif
	
	npm install -g myth
	# npm install -g clean-css
	# npm install -g sqwish
	# npm install -g uglify-js
	
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/stage.env
	sed -i -e "s|__USER__|$(USER)|g" $(CURDIR)/config/stage.env
	sed -i -e "s|__PATH__|$(_PATH)|g" $(CURDIR)/config/stage.env
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/prod.env
	sed -i -e "s|__USER__|$(USER)|g" $(CURDIR)/config/prod.env
	sed -i -e "s|__PATH__|$(_PATH)|g" $(CURDIR)/config/prod.env

