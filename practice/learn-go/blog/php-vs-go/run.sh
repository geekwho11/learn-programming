# @Author: GeekWho
# @Date:   2019-01-24 15:49:58
# @Last Modified by:   GeekWho
# @Last Modified time: 2019-01-24 18:05:09
php=$(which "php")
if [ -z $php ]; then
    echo '请先安装php'
    exit
fi
composer=$(which "composer")
if [ -z $composer ]; then
    echo '请先安装composer'
    exit
fi
go=$(which "go")
if [ -z $go ]; then
    echo '请先安装go'
    exit
fi

root=$(cd "$(dirname "$0")"; pwd)

dirs=(
  var
  object
  interface
  coroutine
)
for dir in ${dirs[@]}; do
    $php $root/$dir/$dir.php
    $go run $root/$dir/$dir.go
done

#package
cd $root/package
composer install
$php package.php
$go run import.go

#unit test
cd $root/unittest
composer install
./vendor/bin/phpunit unittest.php
$go test .

#http
cd $root/http
composer install
$php http.php
./vendor/bin/phpunit httpTest.php
ps -ef|grep "http.php"|grep -v "grep"| awk '{print $2}' | xargs kill -s 9

$nohup $go run http.go &>> /tmp/http.go.log &
$go test .
ps -ef|grep "http.go"|grep -v "grep"| awk '{print $2}' | xargs kill -s 9
