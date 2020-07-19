<?php

namespace DesignPattern\Singleton;

Trait CommonTrait
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
}
