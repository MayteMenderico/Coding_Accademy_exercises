#!/bin/bash

#Answer in terminal - mayte@mayte-Aspire-A515-54:~/Escritorio/Rendu/pool_c_d02/e#x_05$ bash ./my_cat.sh test
#the function echo "$.." allows you to provid parameters 


FILE="$1"
echo "$(<$FILE)"
exit
