#!/bin/bash
#
# Atelier Disko Video Trancoding Script
#
# Copyright (c) 2014-2015 Atelier Disko - All rights reserved.
#
# This software is proprietary and confidential. Redistributions
# not permitted. Unless required by applicable law or agreed to
# in writing, software distributed on an "AS IS" BASIS, WITHOUT
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#

if [[ $# < 3 ]]; then
	echo "Error: Not enough arguments!"
	echo "Usage: ./make-videos.sh <TYPE> <SOURCE DIRECTORY> <TARGET DIRECTORY>"
	echo "Where <TYPE> is i.e. 'mov' or 'mp4'"
	exit
fi

SUFFIX="$1"
FILES=$(ls $2/*.$SUFFIX)
TARGET="$3"

for FILE in $FILES; do
	echo "Processing $FILE ..."

	echo "---MPEG"
	# MPEG
	ffmpeg -y -i $FILE -b:v 3800k -vcodec libx264 -preset 720p  -preset slow \
		-g 30 \
		$TARGET/$(basename -s .$SUFFIX $FILE).mp4

	echo "---WEBM"
	# WEBM
	ffmpeg -y -i $FILE -b:v 3800k -vcodec libvpx -acodec libvorbis -ab 160000 \
		-f webm -g 30 \
		$TARGET/$(basename -s .$SUFFIX $FILE).webm

	echo "---OGG"
	# OGG
	ffmpeg -y -i $FILE -b:v 3800k -vcodec libtheora  -acodec libvorbis -ab 160000 \
		-g 30 \
		$TARGET/$(basename -s .$SUFFIX $FILE).ogv

	echo "OK :)"
done

