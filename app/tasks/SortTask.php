<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:41:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-21 14:02:28
 */
class SortTask extends \Phalcon\Cli\Task
{
    public function mainAction()
    {
        \Algorithm\Sort\BubbleSort::run();
    }

    /**
     * 冒泡排序
     */
    public function bsAction()
    {
        //1000
        \Algorithm\Sort\BubbleSort::run(1000);
        //10000
        \Algorithm\Sort\BubbleSort::run(10000);
        //10,0000
        \Algorithm\Sort\BubbleSort::run(100000);
    }

    public function bs1Action()
    {
        \Algorithm\Sort\BubbleSort::run1();
    }

    /**
     * 快速排序
     */
    public function qsAction()
    {
        //1000
        \Algorithm\Sort\QuickSort::run(1000);
        //10000
        \Algorithm\Sort\QuickSort::run(10000);
        //10,0000
        \Algorithm\Sort\QuickSort::run(100000);
    }
}
