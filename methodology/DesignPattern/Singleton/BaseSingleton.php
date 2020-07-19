<?php
namespace DesignPattern\Singleton;

/**
 *  PHP 单例模式
 * 保证一个类仅有一个实例，并且提供一个访问它的全局访问
 * 单例模式的特点：
 * 1. 一个类只有一个实例
 * 2. 必须自己创建这个实例
 * 3. 向其他类提供访问这个实例的函数
 *
 * @author GeekWho <geekwho@xbc.me>
 * @since 2014.9.5
 */
class BaseSingleton
{
    /**
     *单例数组，支持多个子类实现单例模式
     * @var array
     */
    protected static $instances = array();

    /**
     * 获取单例实例.
     */
    public static function getInstance()
    {
        $class = get_called_class();

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class();
        }

        return self::$instances[$class];
    }
    /**
     * 初始化函数
     */
    protected function __construct()
    {
    }
    /**
     * 不允许序列化serialize
     *
     * @return array
     */
    private function __sleep()
    {
    }

    /**
    * 不允许序列化unserialize
    */
    private function __wakeup()
    {
    }

    /**
     * 不允许clone
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * 可执行的方法
     */
    public function work()
    {
        return true;
    }
}
