<?php
namespace DesignPattern\Singleton;

if (!class_exists('Thread')) {
    return;
}
/**
 * 工作线程
 * @author GeekWho <geekwho@xbc.me>
 * @since 2020.07.28
 */
class WorkerThread extends \Thread {
    public function run()
    {
        return ThreadSafeSingleton::getInstanceByLock();
    }
}
