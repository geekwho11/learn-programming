#!/bin/bash
# Program
#  phalcon dev tools
# History:
# 2018.07.21 GeekWho first release
root=$(cd "$(dirname "$0")";cd ..;pwd)
vendor=$root"/vendor/phalcon/devtools/phalcon.php"
php=$(which "php")
if [ -z $php ]; then
    echo '请先安装php'
    exit
fi
$php $vendor $*
