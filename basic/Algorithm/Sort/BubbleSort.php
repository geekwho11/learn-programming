<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:39:20
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 18:16:20
 */
namespace Algorithm\Sort;

class BubbleSort extends \Algorithm\Sort\Base
{

    /**
     *
     * 1. 外层循环，倒序循环，到第一个元素结束。
     * 2. 内层的循环，前后两个元素对比，最小的数，移动到最前面的位置。
     */
    public function run($input)
    {
        $tmp  = 0 ;
        $count=count($input);
        for ($i = $count ; $i > 0 ; $i--) {
            //倒序查找
            for ($j = 0 ; $j < $i - 1 ; $j++) {
                //找到比第一个数还小的值,交换位置
                if ($input[$j] > $input[$j + 1]) {
                    $tmp           = $input[$j + 1];
                    $input[$j + 1] = $input[$j];
                    $input[$j]     = $tmp;
                }
            }
        }
        return $input;
    }

    /**
     * 1. 外层循环，从第一个元素开始计算
     * 2. 内层倒序开始循环，从最后一个元素开始对比，如果比前一个元素小，就交换位置。
     */
    public function run1($input)
    {
        $num = count($input);
        for ($i = 0 ; $i < $num ; $i++) {
            //倒序循环
            for ($j = $num - 1 ; $j > $i ; $j--) {
                if ($input[$j] < $input[$j - 1]) {
                    $tmp           = $input[$j];
                    $input[$j]     = $input[$j - 1];
                    $input[$j - 1] = $tmp;
                }
            }
        }
        return $input;
    }

    public function sort($num = 10)
    {
        $begin  = microtime(true);
        $random = self::getRandomData($num);
        $data   = $this->run($random);
        $end    = microtime(true);
        $time   = $end - $begin;
        self::echoData($random) . PHP_EOL;
        self::echoData($data) . PHP_EOL;
        echo "num $num sort cost time is $time s" . PHP_EOL;
    }

    public function sort1()
    {
        $data     = array();
        $rand_num = 10;
        $rand_min = 1;
        $rand_max = 100;
        //生成指定个数的随机数
        for ($i = 0 ;$i < $rand_num ;$i++) {
            $data[] = mt_rand($rand_min, $rand_max);
        }
        foreach ($data as $d) {
            echo $d.',';
        }
        $tmp = 0 ;
        //循环次数
        $data = $this->run1($data);
        foreach ($data as $d) {
            echo $d.',';
        }
    }
}
