<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 14:00:11
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 18:39:02
 */
namespace Algorithm\Sort;

class QuickSort extends \Algorithm\Sort\Base
{
    /**
     * 1. 注意循环结束条件
     * 2. 快排的主要思想就是2分法，取一个中间值，将比中间值大和小的值分组。
     * 3. 然后递归调用，直到触发循环结束条件。
     *
     */
    public function run(array $data)
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
        $left   = $this->run($left);
        $right  = $this->run($right);
        $result = array_merge($left, array($k), $right);
        return $result;
    }

    public function sort($num = 10)
    {
        $begin  = microtime(true);
        $random = self::getRandomData($num);
        $data   = $this->run($random);
        $end    = microtime(true);
        $time   = $end - $begin;
        echo "num $num sort cost time is $time s" . PHP_EOL;
        self::echoData($random) . PHP_EOL;
        self::echoData($data) . PHP_EOL;
    }
}
