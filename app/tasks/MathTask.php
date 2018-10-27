<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-21 12:41:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-10-27 19:35:16
 */
class MathTask extends \Phalcon\Cli\Task
{
    public function mainAction()
    {
        \Algorithm\Math\Fibonacci::run();
    }

    /**
     *
     */
    public function fAction()
    {
        \Algorithm\Math\Fibonacci::run();
    }
}
