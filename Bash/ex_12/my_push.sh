#!/bin/bash

commit_message=$1

if [ -z $commit_message]
then
    echo "No commit message, no add and no push."
else
    git add . 
    git commit -am $commit_message
    git push origin master

fi