#!/bin/bash
# Program:
#   cli script
# History:
# 2018.07.21 GeekWho First release.
root=$(cd "$(dirname "$0")"; cd ..;pwd)
php=$(which "php")

$php $root/run $* >> $root/data/cli.log 2>&1
