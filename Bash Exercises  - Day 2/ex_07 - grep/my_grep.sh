#!/bin/bash
#Write a bash script my_grep.sh that takes 2 parameters: a word and a file.
#The script must show every line in the file containing the word passed as parameter

WORD=$1
FILE=$2

grep $WORD $FILE



