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
 * @link http://www.ibm.com/developerworks/cn/opensource/os-php-designptrns/
 * @link http://www.riabook.cn/doc/designpattern/
 * @link http://www.phppan.com/2010/06/php-design-pattern-6-singleton/
 * @since 2014.9.5
 */
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
