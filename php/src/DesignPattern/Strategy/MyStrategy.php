<?php
namespace DesignPattern\Strategy;

/**
 *  PHP 策略模式
 * 定义一系列的算法，把它们一个个封装起来，并且使它们可相互替换。策略模式可以使算法可独立于使用它的客户而变化
 * 策略模式变化的是算法
 *
 * 策略模式优点：
 * 1、策略模式提供了管理相关的算法族的办法
 * 2、策略模式提供了可以替换继承关系的办法 将算封闭在独立的Strategy类中使得你可以独立于其Context改变它
 * 3、使用策略模式可以避免使用多重条件转移语句。
 *
 * 策略模式的缺点：
 * 1、客户必须了解所有的策略 这是策略模式一个潜在的缺点
 * 2、Strategy和Context之间的通信开销
 * 3、策略模式会造成很多的策略类
 *
 * 策略模式的适用场景：
 * 1、许多相关的类仅仅是行为有异。“策略”提供了一种用多个行为中的一个行为来配置一个类的方法
 * 2、需要使用一个算法的不同变体。
 * 3、算法使用客户不应该知道的数据。可使用策略模式以避免暴露复杂的，与算法相关的数据结构
 * 4、一个类定义了多种行为，并且 这些行为在这个类的操作中以多个形式出现。将相关的条件分支移和它们各自的Strategy类中以代替这些条件语句
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/07/php-design-pattern-12-strategy/
 * @since 2014.9.10
 */
class MyStrategy implements IStrategy
{
    public function algorithmInterface()
    {
        echo __CLASS__ . ' algorithmInterface' . PHP_EOL;
    }
}
