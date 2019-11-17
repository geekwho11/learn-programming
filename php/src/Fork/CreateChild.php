<?php
/**
 * 通过pcntl扩展创建子进程
 * 1. 创建一个主进程和子进程。
 * 2. 子进程运行的函数是无限循环。
 * 3. 支持SIGTERM信号退出。
 * 
 * @Author: GeekWho
 * @Date:   2019-11-17
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-11-17
 */
class CreateChild
{
    /**
     * 执行初始化
     */
    public function run()
    {
        $this->before();
        $this->init();
        $this->after();
    }

    /**
     * 初始化之前
     */
    private function before()
    {
        extension_loaded('pcntl') or die('pcntl extension is not installed');
        php_sapi_name() === "cli" or die('only run cli');
    }

    /**
     * 实际执行初始化
     */
    private function init()
    {
        $this->registerSignalHandler();
        $pid = pcntl_fork();
        switch ($pid) {
          case -1:
             die('Fork failed');
             break;

          case 0:
             print "FORK: Child preparing to run..." . PHP_EOL;
             $this->worker();
             break;

          default:
             print "FORK: Parent, letting the child run..." . PHP_EOL;
             $childPid = pcntl_wait($status);
             // 等待子进程的状态
             echo "childPid {$childPid} " . PHP_EOL;
             break;
       }
    }

    /**
     * 初始化之后
     */
    private function after()
    {
    }

    /**
     * 子进程worker
     */
    private function worker()
    {
        while(true){
            echo "run every 1s". PHP_EOL;
            sleep(1);
        }
    }

    /**
     * 注册信号处理
     */
    private function registerSignalHandler()
    {
        // php > 7.1
        pcntl_async_signals(true);

        pcntl_signal(SIGTERM, [$this, 'signalHandler']);
        pcntl_signal(SIGHUP,  [$this, 'signalHandler']);
        pcntl_signal(SIGUSR1, [$this, 'signalHandler']);
    }

    /**
     * 信号处理函数
     */
    private function signalHandler($signo)
    {
        switch ($signo) {
            case SIGTERM:
                 // handle shutdown tasks
                 echo "get signal SIGTERM" . PHP_EOL;
                 exit;
                 break;
            case SIGHUP:
                 // handle restart tasks
                 echo "get signal SIGHUP" . PHP_EOL;
                 break;
            case SIGUSR1:
                 echo "Caught SIGUSR1..." . PHP_EOL;
                 break;
            default:
                 // handle all other signals
                 echo "get default signal" . PHP_EOL;
                 exit;
        }
    }
}

(new CreateChild)->run();
