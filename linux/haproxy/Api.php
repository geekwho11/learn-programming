<?php

/**
 * @Author: GeekWho
 * @Date:   2019-02-21 11:14:11
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-02-21 12:19:39
 */
class Api
{
    public function run()
    {
        $req = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'--';
        echo sprintf(
            "request HTTP_HOST %s real SERVER_PORT %s" . PHP_EOL,
            $_SERVER['HTTP_HOST'],
            $_SERVER['SERVER_PORT']
        );
    }
}
(new \Api)->run();
