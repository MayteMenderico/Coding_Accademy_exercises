#!/bin/bash

username=$1

if [ $username = $USER ]
then
    echo "Home Directory: /$username"
    echo "Default Shell: /bin/bash"
else
    echo "Error."
fi