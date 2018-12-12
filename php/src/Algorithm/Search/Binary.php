<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-22 10:51:33
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-22 11:33:59
 */
namespace Algorithm\Search;

class Binary extends Base
{
    public static function run($num = 10)
    {
        $random = self::getRandomData($num);
        $random = \Algorithm\Sort\QuickSort::sort($random);
        $findme = mt_rand(0, $num-1);
        $findme = $random[$findme];
        $begin = microtime(true);
        $data = self::search($random, $findme);
        $end  = microtime(true);
        $time   = $end - $begin;
        echo "num $num search $findme cost time is $time s" . PHP_EOL;
        //self::echoData($random) . PHP_EOL;
    }

    public static function search($array, $e)
    {
        $start = 0;
        $end   = count($array);
        while ($start <= $end) {
            $find = intval(($start+$end)/2);
            if ($array[$find] == $e) {
                return $find;
            }
            if ($array[$find] > $e) {
                $end = $find - 1;
            } else {
                $start= $find + 1;
            }
        }
    }
}
