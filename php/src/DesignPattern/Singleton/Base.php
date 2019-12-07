<?php
namespace DesignPattern\Singleton;

class Base
{
    // 私有静态变量
    private static $instance = null;

    /**
     * 单例模式，最简单的实现方式
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     *单例数组，支持多个子类实现单例模式
     * @var array
     */
    protected static $instances = array();

    /**
     * 获取单例实例.
     */
    public static function instance()
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
     * 不允许序列化unserialize
     *
     * @return void
     */
    private function __clone()
    {
    }
}
