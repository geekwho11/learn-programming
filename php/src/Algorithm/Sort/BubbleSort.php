<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:39:20
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-21 14:08:51
 */
namespace Algorithm\Sort;

class BubbleSort extends \Algorithm\Sort\Base
{
    public static function run($num = 10)
    {
        $begin = microtime(true);
        $random = self::getRandomData($num);
        $data = self::sort($random);
        $end  = microtime(true);
        $time   = $end - $begin;
        echo "num $num sort cost time is $time s" . PHP_EOL;
        //self::echoData($random) . PHP_EOL;
        //self::echoData($data) . PHP_EOL;
    }

    public static function sort(array $data)
    {
        $tmp = 0 ;
        $count=count($data);
        for ($i = $count ; $i > 0 ; $i--) {
            //倒序查找
            for ($j = 0 ; $j < $i-1 ; $j++) {
                //找到比第一个数还小的值,交换位置
                if ($data[$j] > $data[$j+1]) {
                    $tmp = $data[$j+1];
                    $data[$j+1] = $data[$j];
                    $data[$j] = $tmp;
                }
            }
        }
        return $data;
    }

    public static function run1()
    {
        $data = array();
        $rand_num = 10;
        $rand_min = 1;
        $rand_max = 100;
        //生成指定个数的随机数
        for ($i = 0 ;$i < $rand_num ;$i++) {
            $data[] = mt_rand($rand_min, $rand_max);
        }
        //echo var_export($data , true);
        $tmp = 0 ;
        //循环次数
        for ($i = 0 ; $i < $rand_num ; $i++) {
            //倒序循环
            for ($j = $rand_num-1 ; $j > $i ; $j--) {
                if ($data[$j] < $data[$j-1]) {
                    $tmp = $data[$j];
                    $data[$j] = $data[$j-1];
                    $data[$j-1] = $tmp;
                }
            }
        }
        //echo var_export($data , true);
        foreach ($data as $d) {
            echo $d.' ';
        }
    }
}
