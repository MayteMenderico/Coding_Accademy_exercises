#!/bin/bash

#Write a shell script that will take a username as it first parameter and display his home and his starting shell like in the example. if any error happens, your script must return an error code and display the message “Error.” followed by a newline on the error output.

username=$1

if [ $username = $USER ]
then
    echo "Home Directory: /$username"
    echo "Default Shell: /bin/bash"
else
    echo "Error."
fi
