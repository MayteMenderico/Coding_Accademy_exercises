#!/bin/bash
#Write a bash script mr_clean.sh which will ‘clean’ your current depository. ‘clean’ means delete all files finished by a ‘~’ (emacs temporary files).
#Beware, the script must be recursive: it must clean your current directory and all sub-directories.

find . -type f -name "*~" -delete 
