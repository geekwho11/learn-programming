#!/bin/bash
# Program:
#.   一键执行脚本
# History:
# @Author: GeekWho
# @Date:   2019-02-21 14:32:43
# @Last Modified by:   GeekWho
# @Last Modified time: 2019-03-30 17:09:04
php=$(which "php")
if [ -z $php ]; then
    echo '请先安装php'
    exit
fi

docker=$(which "docker")
if [ -z $docker ]; then
    echo '请先安装docker'
    exit
fi

git=$(which "git")
if [ -z $git ]; then
    echo '请先安装git'
    exit
fi
webroot=$(cd "$(dirname "$0")";pwd)

# 启动API Server
php -S 0.0.0.0:2016 -t $webroot $webroot/Api.php
php -S 0.0.0.0:2017 -t $webroot $webroot/Api.php
php -S 0.0.0.0:2018 -t $webroot $webroot/Api.php

# 获取当前的IP地址
ip=$("ifconfig | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'|grep -v '172*'| tail -1")
if [ -z $ip ]; then
    echo '获取ip地址失败'
    exit
fi

# 拉取Dockerfile 构建镜像
root=$(cd "$(dirname "$0")";cd ..;cd..;pwd)
cd $root
if [[ -d docker.xbc.me ]]; then
  git clone git@github.com:geekwho11/docker.xbc.me.git
fi

cd docker.xbc.me/docker/alpine

# 替换固定的IP为当前IP地址
sed -i "s/192.168.1.3/${ip}/g" `grep 192.168.1.3 -rl ./build/haproxy/*`
# 构建镜像
docker build -t my:haproxy -f build/haproxy/Dockerfile .
# 运行镜像，执行语法检查
docker run -it --rm --name haproxy-syntax-check my:haproxy haproxy -c -f /usr/local/etc/haproxy/haproxy.cfg
# 后台启动HAProxy镜像
docker run -d --name haproxy -p 2019:2019 my:haproxy

# sleep 11
secs=$((1 * 11))
while [ $secs -gt 0 ]; do
   echo -ne "waiting for $secs\033[0K\r"
   sleep 1
   : $((secs--))
done
# 访问Api Server
curl http://0.0.0.0:2019

curl http://0.0.0.0:2019

curl http://0.0.0.0:2019
