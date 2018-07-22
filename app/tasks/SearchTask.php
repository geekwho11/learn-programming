<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:41:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-22 11:26:53
 */
class SearchTask extends \Phalcon\Cli\Task
{
    public function mainAction()
    {
        \Algorithm\Search\Binary::run();
    }

    /**
     * 二分法查找
     */
    public function bAction()
    {
        \Algorithm\Search\Binary::run(1000);
        \Algorithm\Search\Binary::run(10000);
        \Algorithm\Search\Binary::run(100000);
    }
}
