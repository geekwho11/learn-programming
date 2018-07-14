#!/bin/bash
# Program:
#     php run unit test
# History:
# 2018.07.21 GeekWho first release.
DIR=$(cd "$(dirname "$0")";cd ..; pwd)
param1=$1
debug=""

phpunit="$DIR/vendor/phpunit/phpunit/phpunit"

if [[ ! -f "$phpunit" ]]; then
    phpunit=$(which "phpunit")
fi

if [ -z $phpunit ]; then
    echo '请先安装phpunit'
    exit
fi

if [[ $3 == "" && $1 != "" && $2 != "" ]];then
    $phpunit -c $DIR/tests/phpunit.xml "$DIR/tests/Test/${param1}Test.php" "${param1}Test" --filter=$2  --debug
    exit
fi

if [[ $3 != "" || $2 != "" || $param1 == "--debug" || $param1 == "" ]]; then
    $phpunit -c $DIR/tests/phpunit.xml $@
    exit
fi

if [[ $param1 != "" && $param1 != "--debug" ]]; then
    param1="$DIR/tests/Test/${param1}Test"
    debug=$2
    $phpunit -c $DIR/tests/phpunit.xml $param1 $debug
    exit
fi
