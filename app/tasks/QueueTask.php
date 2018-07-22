<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:41:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-22 17:52:57
 */
class QueueTask extends \Phalcon\Cli\Task
{
    public function mainAction()
    {
        \DataStructrue\Queue\DoubleQueue::run();
    }

    /**
     * 双向队列
     */
    public function dqAction()
    {
        \DataStructrue\Queue\DoubleQueue::run();
    }
}
