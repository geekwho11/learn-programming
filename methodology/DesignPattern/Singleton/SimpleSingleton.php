<?php
namespace DesignPattern\Singleton;

/**
 * 设计模式之单例模式
 * 保证一个类仅有一个实例，并且提供一个访问它的全局访问
 * 单例模式的特点：
 * 1. 一个类只有一个实例
 * 2. 必须自己创建这个实例
 * 3. 向其他类提供访问这个实例的函数
 *
 * @author GeekWho <geekwho@xbc.me>
 * @since 2014.9.5
 */
class SimpleSingleton
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
     * 初始化函数
     */
    private function __construct()
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
