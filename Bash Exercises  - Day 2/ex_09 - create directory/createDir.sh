#!/bin/bash
#-gt = greater than/lt - less than
#Now, you have to write a bash script that will automatically create the exercises’ directory of the day.
#If a directory already exist no error should appear and the missing ones must be created

QtdDir=$1

for count in $(seq 1 $QtdDir)
do
    if [ $count -gt 9 ]
    then
        mkdir ex_$count
    else
        mkdir ex_0$count
    fi
done
