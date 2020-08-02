<?php
namespace DesignPattern\AbstractFactory\SimpleAbstractFactory;

/**
 *  PHP 抽象工厂模式
 * 抽象工厂模式提供一个创建与系统相关或相互依赖对象的接口，而无需指定它们的具体的类。
 * 抽象工厂模式的特点：
 * 1. 分离了具体的类
 * 2. 是增加或替换产品族变得容易
 * 3. 有利于产品的一致性
 * 缺点：
 * 难以支持新种类的产品。
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://zh.wikipedia.org/wiki/%E6%8A%BD%E8%B1%A1%E5%B7%A5%E5%8E%82%E6%A8%A1%E5%BC%8F#.E9.80.82.E7.94.A8.E6.80.A7
 * @link http://www.phppan.com/2010/05/php-design-pattern-3-abstract-factory/
 * @since 2014.9.5
 */
class MacFactory extends ObjectFactory
{
    public function CreateButton()
    {
        return new MacButton();
    }
    public function CreateBorder()
    {
        return new MacBorder();
    }
}
