<?php

/**
 * @Author: GeekWho
 * @Date:   2019-02-02 21:38:17
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-02-02 21:48:36
 */
namespace Pthreads;

class My extends \Thread
{
    /**
     * @see http://php.net/manual/zh/threaded.synchronized.php
     */
    public function run()
    {
        $this->synchronized(function ($thread) {
            if (!$thread->done) {
                $thread->wait();
            }
        }, $this);
    }
}
