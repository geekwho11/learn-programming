# @Author: GeekWho
# @Date:   2018-12-03 01:37:43
# @Last Modified by:   GeekWho
# @Last Modified time: 2018-12-05 22:21:54
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

$phpunit -c $DIR/tests/phpunit.xml "$DIR/src/"
