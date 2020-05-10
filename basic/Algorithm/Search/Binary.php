<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-22 10:51:33
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 23:48:51
 */
namespace Algorithm\Search;

class Binary extends Base
{
    public function run($array, $e)
    {
        $start = 0;
        $end   = count($array);
        while ($start <= $end) {
            $find = intval(($start + $end) / 2);
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

    public function test($num = 10)
    {
        $random = self::getRandomData($num);
        $random = (new \Algorithm\Sort\QuickSort)->run($random);
        $findme = mt_rand(0, $num - 1);
        $findme = $random[$findme];
        $begin  = microtime(true);
        $data   = $this->run($random, $findme);
        $end    = microtime(true);
        $time   = $end - $begin;
        echo "num $num search $findme cost time is $time s" . PHP_EOL;
        self::echoData($random) . PHP_EOL;
    }
}
