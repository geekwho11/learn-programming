<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-19 17:31:43
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-19 23:33:58
 */
class Daemon
{
    public $pid = '/tmp/daemon.pid';

    public $job = '/tmp/job.log';

    public $dir = '/tmp/';

    /**
     * 执行入口
     */
    public function run()
    {
        $this->_daemon();
    }

    /**
     * 实现daemon化
     *
     * 1. 复制一个子进程出来
     * 2. 创建新的会话
     * 3. 改变当前目录
     * 4. 重设文件权限掩码
     * 5. 关闭文件描述符
     *
     * @see http://php.net/manual/zh/function.pcntl_fork.php
     * @see http://php.net/manual/zh/function.posix_setsid.php
     * @see http://php.net/manual/zh/function.posix_setegid.php
     * @see http://php.net/manual/zh/function.posix_seteuid.php
     * @see http://php.net/manual/zh/function.chdir.php
     * @see http://php.net/manual/zh/function.umask.php
     * @see http://php.net/manual/zh/function.fopen.php
     * @see http://php.net/manual/zh/function.fwrite.php
     * @see http://php.net/manual/zh/function.fclose.php
     */
    private function _daemon()
    {
        $this->before();

        $this->logger(__FUNCTION__ . ' before run');
        $pid = pcntl_fork();
        if ($pid == -1) {
            die('fork failed' . PHP_EOL);
        }
        if ($pid) {
            //退出父进程
            exit(0);
        }
        $this->logger('fork pid ' . $pid . PHP_EOL);

        $this->logger('posix_setsid before run');
        $session_id = posix_setsid();
        @posix_setegid(-1);
        @posix_seteuid(-1);
        if ($session_id == -1) {
            die('session failed' . PHP_EOL);
        }
        $this->logger('posix_setsid after run');

        $this->logger('chdir before run');
        chdir($this->dir);
        $this->logger('chdir after run');

        $this->logger('umask before run');
        $old = umask();
        $new = umask(0);
        $this->logger("old mask is " . $old . ' new mask is ' . $new);
        $this->logger('umask after run');

        $this->logger('fclose before run');

        try {
            $fp = fopen($this->pid, 'w') or die("Can't create pid file");
            //把当前进程的id写入到文件中
            fwrite($fp, posix_getpid());
            fclose($fp);
            //关闭文件描述符
            fclose(STDIN);
            fclose(STDOUT);
            fclose(STDERR);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
        /**
         * 遇到的坑
         * 1. 在当前的位置关闭文件描述符后，就不能再写日志了
         * 2. 整体的逻辑只能写在一个函数里，如果是两个函数就可能不起作用了。
         */

        $this->after();
        return;
    }

    /**
     * 环境检查函数
     */
    public function before()
    {
        extension_loaded('pcntl') or die('pcntl extension is not installed');
        extension_loaded('posix') or die('posix extension is not installed');
        php_sapi_name() === "cli" or die('only run cli');
    }

    public function after()
    {
        while (true) {
            file_put_contents($this->job, microtime(true) . ' job ' . PHP_EOL, FILE_APPEND);
            sleep(5);
        }
    }

    /**
     * 日志
     */
    private function logger($msg)
    {
        echo microtime(true) . ' ' . $msg . PHP_EOL;
    }
}

(new Daemon)->run();
