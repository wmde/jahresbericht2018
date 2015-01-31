#
# Atelier Disko Distribution
#
# Copyright (c) 2013-2015 Atelier Disko - All rights reserved.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#

NAME ?= $(shell basename $(CURDIR))

.PHONY: install
install: 
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/david.env
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/vm.env
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/stage.env
	sed -i -e "s|__NAME__|$(NAME)|g" $(CURDIR)/config/prod.env
