#!/bin/bash
# Program:
# go run unit test
#
# @Author: GeekWho
# @Date:   2018-07-20 11:10:35
# @Last Modified by:   GeekWho
# @Last Modified time: 2018-10-27 18:16:48
# @see https://jimmysong.io/go-practice/docs/go_unit_test.html
ROOT=$(dirname "$0")
DIR=$(cd "$ROOT";cd ..; pwd)
param1=$1
target="$ROOT"
debug=""

go_bin="/usr/local/go/bin/go"

if [[ ! -f "$go_bin" ]]; then
    go_bin=$(which "go")
fi
if [ -z $go_bin ]; then
    echo '请先安装go'
    exit
fi

debug="-cover=true"
#$go_bin test -v $debug $target
exercise_tests=(
  exercise-fibonacci-closure
)

for name in ${exercise_tests[@]}; do
    $go_bin test -v $debug $target/${name}_test.go $target/${name}.go
done


