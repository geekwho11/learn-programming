<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-22 10:51:33
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 23:31:58
 */
namespace Algorithm\String;

class Reverse extends Base
{
    //针对utf8编码
    public function run($str)
    {
        preg_match_all('/./us', $str, $mathces);
        return implode('', array_reverse($mathces[0]));
    }

    public function run1($str)
    {
        $code = "UTF-8";
        $len  = mb_strlen($str, $code);
        $_str = '';
        for ($i = $len - 1 ; $i >= 0; $i--) {
            $_str .= mb_substr($str, $i, 1, $code);
        }
        return $_str;
    }

    public function run2($str)
    {
        return strrev($str);
    }

    public function test($num = 10)
    {
        //只针对ascii字符串

        echo $this->run("Hello World,你好，中国") . PHP_EOL;

        echo $this->run1("Hello World,你好，中国") . PHP_EOL;

        echo $this->run2("Hello world!") . PHP_EOL;
    }
}
