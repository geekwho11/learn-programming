<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 14:00:11
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-21 14:30:25
 */
namespace Algorithm\Sort;

class QuickSort extends \Algorithm\Sort\Base
{
    public static function run($num = 10)
    {
        $begin  = microtime(true);
        $random = self::getRandomData($num);
        $data   = self::sort($random);
        $end    = microtime(true);
        $time   = $end - $begin;
        echo "num $num sort cost time is $time s" . PHP_EOL;
        //self::echoData($random) . PHP_EOL;
        //self::echoData($data) . PHP_EOL;
    }

    public static function sort(array $data)
    {
        $count = count($data);
        if ($count <= 1) {
            return $data;
        }
        $k     = $data[0];
        $left  = array();
        $right = array();
        for ($i = 1 ;$i < $count; $i++) {
            if ($k >= $data[$i]) {
                $left[] = $data[$i];
            } else {
                $right[] = $data[$i];
            }
        }
        $left   = self::sort($left);
        $right  = self::sort($right);
        $result = array_merge($left, array($k), $right);
        return $result;
    }
}
