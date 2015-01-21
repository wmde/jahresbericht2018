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
UNAME := $(shell uname -s)

.PHONY: install
install: 
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/david.env
	# USER already set in david.env
	sed -i -e "s|__PATH__|$(_PATH)|g" $(CURDIR)/config/david.env
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/vm.env
	# USER already set in vm.env
	sed -i -e "s|__PATH__|/vagrant/$(NAME)|g" $(CURDIR)/config/vm.env
	
	chmod -R a+rwX $(CURDIR)/log

.PHONY: install-deploy
install-deploy:
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/stage.env
	sed -i -e "s|__USER__|$(USER)|g" $(CURDIR)/config/stage.env
	sed -i -e "s|__PATH__|$(_PATH)|g" $(CURDIR)/config/stage.env
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/prod.env
	sed -i -e "s|__USER__|$(USER)|g" $(CURDIR)/config/prod.env
	sed -i -e "s|__PATH__|$(_PATH)|g" $(CURDIR)/config/prod.env
