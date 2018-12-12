<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 14:00:11
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-21 20:02:36
 */
namespace Algorithm\Sort;

class HeapSort extends \Algorithm\Sort\Base
{
    public static function run($num = 10)
    {
        $data = self::getRandomData($num);
        $begin = microtime(true);
        $data = self::maxHeapSort($data);
        $end  = microtime(true);
        $time   = $end - $begin;
        echo "maxheap num $num sort cost time is $time s" . PHP_EOL;
        //self::echoData($random) . PHP_EOL;
        //self::echoData($data) . PHP_EOL;

        $data = self::getRandomData($num);
        $begin = microtime(true);
        $data = self::minHeapSort($data);
        $end  = microtime(true);
        $time   = $end - $begin;
        echo "minheap num $num sort cost time is $time s" . PHP_EOL;
        //self::echoData($random) . PHP_EOL;
        //self::echoData($data) . PHP_EOL;
    }

    //最大堆排序
    public static function maxHeapSort($data)
    {
        $count = count($data);
        //创建最大堆
        for ($i = floor($count/2)-1; $i >=0 ; $i--) {
            self::heapAdjust($i, $count, $data, "max");
        }
        //进行排序
        for ($i = $count-1 ; $i >=0 ; $i--) {
            self::swap($data[0], $data[$i]);
            self::heapAdjust(0, $i, $data, "max");
        }
        return $data;
    }
    //最小堆排序
    public static function minHeapSort($data)
    {
        $count = count($data);
        //创建最小堆
        for ($i = floor($count/2)-1; $i >=0 ; $i--) {
            self::heapAdjust($i, $count, $data, "min");
        }
        //进行排序
        for ($i = $count-1 ; $i >=0 ; $i--) {
            self::swap($data[0], $data[$i]);
            self::heapAdjust(0, $i, $data, "min");
        }
        return $data;
    }
    public static function heapAdjust($i, $j, &$data, $type = "max")
    {
        //根节点
        $root   = $i;
        //左节点
        $left  = 2 * $i + 1;
        //右节点
        $right = 2 * $i + 2;
        if ($type == "max") {
            //将最大的值移动到堆顶
            if ($left < $j && $data[$left] > $data[$root]) {
                $root = $left;
            }
            if ($right < $j && $data[$right] > $data[$root]) {
                $root = $right;
            }
        } elseif ($type == "min") {
            //将最小的值移动到堆顶
            if ($left < $j && $data[$left] < $data[$root]) {
                $root = $left;
            }
            if ($right < $j && $data[$right] < $data[$root]) {
                $root = $right;
            }
        }
        if ($root != $i) {
            self::swap($data[$root], $data[$i]);
            self::heapAdjust($root, $j, $data, $type);
        }
    }
    public static function swap(&$i, &$j)
    {
        $tmp = $i;
        $i   = $j;
        $j   = $tmp;
    }
}
