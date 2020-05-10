#!/bin/bash
# @Author: GeekWho
# @Date:   2018-12-03 01:37:43
# @Last Modified by:   GeekWho
# @Last Modified time: 2018-12-13 00:16:50
DIR=$(cd "$(dirname "$0")";cd ..; pwd)
ROOT=$(cd "$(dirname "$DIR")";cd ..; pwd)
param1=$1
debug=""

phpunit="$DIR/vendor/bin/phpunit"

if [[ ! -f "$phpunit" ]]; then
    phpunit=$(which "phpunit")
fi
if [ -z $phpunit ]; then
    echo '请先安装phpunit'
    exit
fi

cd $DIR
$phpunit -c tests/bin/phpunit.xml src
$phpunit -c tests/bin/phpunit.xml tests
