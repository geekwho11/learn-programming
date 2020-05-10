<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-24 16:21:18
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-24 17:11:41
 */

class SwooleCoroutine
{
    public function run()
    {
        extension_loaded('swoole') or die('swoole extension is not installed');
        $this->case1();
        $this->case2();
        $this->case3();
    }

    /**
     * 开启3个协程，无阻塞IO
     */
    public function case1()
    {
        echo "run " . __FUNCTION__ ." ". microtime(true). PHP_EOL;

        go(function () {
            echo "hello go1 " . PHP_EOL;
        });

        echo "hello main " . PHP_EOL;

        go(function () {
            echo "hello go2 " . PHP_EOL;
        });
    }


    /**
     * 开启3个协程，第一个协程阻塞
     */
    public function case2()
    {
        echo "run " . __FUNCTION__ ." " . microtime(true). PHP_EOL;

        go(function () {
            Co::sleep(1); // 只新增了一行代码
            echo "hello go1 " . PHP_EOL;
        });

        echo "hello main " . PHP_EOL;

        go(function () {
            echo "hello go2 " . PHP_EOL;
        });
    }

    /**
     * 开启3个协程，第3个协程阻塞
     */
    public function case3()
    {
        echo "run " . __FUNCTION__ ." ". microtime(true). PHP_EOL;

        go(function () {
            echo "hello go1 " . PHP_EOL;
        });

        echo "hello main " . PHP_EOL;

        go(function () {
            Co::sleep(1); // 只新增了一行代码
            echo "hello go2 " . PHP_EOL;
        });
    }
}
(new SwooleCoroutine())->run();
