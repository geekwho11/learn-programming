<?php
namespace DesignPattern\Factory\SimpleFactory;

/**
 *  PHP 工厂模式
 *
 * 目的：
 * 定义一个用于创建对象的接口，让子类决定实例化哪一个类。Factory Method使用一个类的实例化延迟到其子类
 *
 * 工厂模式优点：
 * 工厂方法模式可以允许系统在不修改工厂角色的情况下引进新产品。
 *
 * 工厂模式的缺点：
 * 客户可能仅仅为了创建一个特定的ConcreteProduct对象，就不得不创建一个Creator子类
 *
 * 工厂模式的适用场景：
 * 1、当一个类不知道它所必须创建的对象的类的时候
 * 2、当一个类希望由它的子类来指定它所创建的对象的时候
 * 3、当类将创建对象的职责委托给多个帮助子类的某一个，并且你希望将哪一个帮助子类是代理者这一信息局部化的时候
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/07/php-design-pattern-9-factory-method/
 * @since 2014.9.10
 */
class MyProduct implements IProduct
{
    public function operation()
    {
        echo __CLASS__ . ' ' . __FUNCTION__  . " was called";
    }
}
