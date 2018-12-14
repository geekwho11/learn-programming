<?php
/**
 * @Author: GeekWho
 * @Date:   2018-07-14 17:58:22
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 18:07:24
 */

namespace Algorithm;

class Base extends \Base
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
        echo PHP_EOL;
    }
}
