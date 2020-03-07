#!/bin/bash/

FILE=$1
WORD1=$2
WORD2=$3

sed -i "s/$WORD1/$WORD2/g" $FILE
