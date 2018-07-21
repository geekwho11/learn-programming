<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:41:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-21 19:51:42
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

    /**
     * 选择排序
     */
    public function ssAction()
    {
        //1000
        \Algorithm\Sort\SelectSort::run(1000);
        //10000
        \Algorithm\Sort\SelectSort::run(10000);
        //10,0000
        \Algorithm\Sort\SelectSort::run(100000);
    }

    /**
     * 归并排序
     */
    public function msAction()
    {
        //1000
        \Algorithm\Sort\MergeSort::run(1000);
        //10000
        \Algorithm\Sort\MergeSort::run(10000);
        //10,0000
        \Algorithm\Sort\MergeSort::run(100000);
    }
}
