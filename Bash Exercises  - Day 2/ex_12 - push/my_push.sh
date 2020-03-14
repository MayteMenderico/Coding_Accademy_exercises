#!/bin/bash
#Write a shell script ‘my_push.sh’. It will add files to a commit, commit the modifications and then push the commit on the server. This script must take at least one parameter which is the commit message. If no other parameters are given, you must add every files to the commit. Every other paramters after the firstone are the files we want to add to the commit. If no paramters are given, you must display “No commit message, no add and no push.”.

commit_message=$1

if [ -z $commit_message]
then
    echo "No commit message, no add and no push."
else
    git add . 
    git commit -am $commit_message
    git push origin master

fi
