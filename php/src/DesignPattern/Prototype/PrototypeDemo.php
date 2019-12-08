<?php
namespace DesignPattern\Prototype;

/**
 *  PHP 原型模式
 *
 * Prototype模式优点：
 * 1、可以在运行时刻增加和删除产品
 * 2、可以改变值以指定新对象
 * 3、可以改变结构以指定新对象
 * 4、减少子类的构造
 * 5、用类动态配置应用
 *
 * Prototype模式的缺点：
 * Prototype模式的最主要缺点就是每一个类必须配备一个克隆方法。
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/06/php-design-pattern-8-prototype/
 * @since 2014.9.5
 */
class PrototypeDemo implements IPrototype
{
    private $_demo;
    public function __construct($demo)
    {
        $this->setDemo($demo);
    }
    public function setDemo($demo)
    {
        $this->_demo = $demo;
    }
    public function getDemo()
    {
        return $this->_demo;
    }
    public function copy($is_deep = false)
    {
        if ($is_deep) {
            return unserialize(serialize($this));
        } else {
            return clone $this;
        }
    }
}
