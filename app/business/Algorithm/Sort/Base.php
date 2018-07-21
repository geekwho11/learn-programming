<?php
/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:39:42
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-21 13:30:42
 */
namespace Algorithm\Sort;

class Base
{
    public static function getRandomData($rand_num = 10, $rand_max = 10000000, $rand_min = 1)
    {
        $data = array();
        //生成指定个数的随机数
        for ($i = 0 ;$i < $rand_num ;$i++) {
            $data[] = mt_rand($rand_min, $rand_max);
        }
        return $data;
    }

    public static function echoData($data)
    {
        if (is_object($data) || is_array($data)) {
            foreach ($data as $d) {
                echo $d.' ';
            }
        } elseif (is_string($data)) {
            echo $data;
        }
        echo "\n";
    }
}
