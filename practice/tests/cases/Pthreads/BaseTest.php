<?php

/**
 * unit test
 */
namespace Pthreads;

class BaseTest extends \PHPUnit\Framework\TestCase
{
    /**
     * 如果扩展Thread不存在则跳过测试用例
     * 1. markTestSkipped 告诉phpunit直接跳过
     * 2. markTestIncomplete 标记该测试用例尚未完成
     *
     * @return void
     */
    public function testRun()
    {
        if (!class_exists('Thread')) {
            $this->markTestSkipped('This test was skipped because Thread class not found.');
        }
        $tests = [
            '\Pthreads\Base',
            '\Pthreads\My',
            '\Pthreads\WebRequest',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test),
                "$test class not found"
            );
        }
        // run test
        $my     = new \Pthreads\My();
        // 在独立线程中执行 run 方法
        $return = $my->start();
        $this->assertEquals(
            true,
            $return,
            "start test failed."
        );
        $return = $my->isRunning();
        $this->assertEquals(
            true,
            $return,
            "isRunning test failed."
        );
        $my->synchronized(function ($thread) {
            $thread->done = true;
            $thread->notify();
        }, $my);
        // 让当前执行上下文等待被引用线程执行完毕
        $return = $my->join();
        $this->assertEquals(
            true,
            $return,
            "isRunning test failed."
        );
        $return = $my->done;
        $this->assertEquals(
            true,
            $return,
            "done test failed."
        );
        $return = $my->isRunning();
        $this->assertEquals(
            false,
            $return,
            "isRunning test failed."
        );

        // test web request
        $t = microtime(true);
        $g = new WebRequest(sprintf("http://www.baidu.com/?q=%s", rand() * 10));
        /* starting synchronized */
        if ($g->start()) {
            printf("Request took %f seconds to start ", microtime(true) - $t);
            while ($g->isRunning()) {
                echo ".";
                $g->synchronized(function () use ($g) {
                    $g->wait(100);
                });
            }
            if ($g->join()) {
                printf(" and %f seconds to finish receiving %d bytes\n", microtime(true) - $t, strlen($g->data));
            } else {
                printf(" and %f seconds to finish, request failed\n", microtime(true) - $t);
            }
        }
    }
}
