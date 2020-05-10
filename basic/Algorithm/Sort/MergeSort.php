<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 14:00:11
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 21:44:04
 */
namespace Algorithm\Sort;

class MergeSort extends \Algorithm\Sort\Base
{
    /**
     *
     */
    public function run($array1, $array2)
    {
        $sort = array();
        while ($array1 && $array2) {
            if ($array1[0] >= $array2[0]) {
                //弹出数组的第一个元素
                $sort[] = array_shift($array2);
            } else {
                $sort[] = array_shift($array1);
            }
        }
        return array_merge($sort, $array1, $array2);
    }

    public function sort($num = 10)
    {
        $data1 = self::getRandomData($num);
        sort($data1);
        $data2 = self::getRandomData($num);
        sort($data2);
        self::echoData($data1) . PHP_EOL;
        self::echoData($data2) . PHP_EOL;
        $begin  = microtime(true);
        $data   = $this->run($data1, $data2);
        $end    = microtime(true);
        $time   = $end - $begin;
        echo "num $num sort cost time is $time s" . PHP_EOL;
        self::echoData($random) . PHP_EOL;
        self::echoData($data) . PHP_EOL;
    }
}
