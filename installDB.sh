#!/bin/bash

importFile="KazakhstanDB.sql";

result=$($(which mysql) -uroot -proot < $importFile)

if [ $? != 0 ]; then
    printf "Error when executing command: '$command'"
    exit $ERROR_CODE
else
	echo "$importFile was successfuly imported"
fi