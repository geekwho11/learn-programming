<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-22 10:51:33
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-22 11:19:15
 */
namespace Algorithm\String;

class Reverse extends Base
{
    public static function run($num = 10)
    {
        //只针对ascii字符串
        echo strrev("Hello world!") . PHP_EOL;

        echo self::utf8_strrev1("Hello World,你好，中国") . PHP_EOL;

        echo self::utf8_strrev2("Hello World,你好，中国") . PHP_EOL;
    }

    //针对utf8编码
    public static function utf8_strrev1($str)
    {
        preg_match_all('/./us', $str, $mathces);
        return implode('', array_reverse($mathces[0]));
    }

    public static function utf8_strrev2($str)
    {
        $code = "UTF-8";
        $len = mb_strlen($str, $code);
        $_str = '';
        for ($i = $len - 1 ; $i >= 0; $i--) {
            $_str .= mb_substr($str, $i, 1, $code);
        }
        return $_str;
    }
}
