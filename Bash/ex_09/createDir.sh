#!/bin/bash
#-gt = greater than/lt - less than

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