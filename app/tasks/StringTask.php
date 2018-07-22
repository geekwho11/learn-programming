<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:41:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-22 11:18:39
 */
class StringTask extends \Phalcon\Cli\Task
{
    public function mainAction()
    {
        \Algorithm\String\Reverse::run();
    }

    /**
     * 反转
     */
    public function rAction()
    {
        \Algorithm\String\Reverse::run();
    }
}
