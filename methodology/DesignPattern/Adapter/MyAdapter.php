<?php
namespace DesignPattern\Adapter;

/**
 *  PHP 适配器模式
 *
 * 适配器模式适用场景：
 * 1、你想使用一个已经存在的类，而它的接口不符合你的需求
 * 2、你想创建一个可以复用的类，该类可以与其他不相关的类或不可预见的类协同工作
 * 3、你想使用一个已经存在的子类，但是不可能对每一个都进行子类化以匹配它们的接口。对象适配器可以适配它的父类接口（仅限于对象适配器）
 *
 * 适配器的实现：
 * 1. 类适配器的实现是用继承
 * 2. 对象适配器的实现是用委托
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/07/php-design-pattern-10-adapter/
 * @since 2014.9.9
 */
class MyAdapter extends OtherAdapter implements IAdapter
{
    public function method2()
    {
        echo "MyAdapter method2 was called" . PHP_EOL;
    }
}
