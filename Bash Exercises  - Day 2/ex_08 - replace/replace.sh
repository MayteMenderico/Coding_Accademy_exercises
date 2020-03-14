#!/bin/bash/
#Write a bash script replace.sh that takes 3 parameters: a file and two words. The script must replace all the occurences of the first word by the second word in the file.

FILE=$1
WORD1=$2
WORD2=$3

sed -i "s/$WORD1/$WORD2/g" $FILE
