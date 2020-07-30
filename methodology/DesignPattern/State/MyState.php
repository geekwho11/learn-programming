<?php
namespace DesignPattern\State;

/**
 *  PHP 状态模式
 *
 * 状态模式优点：
 * 1、它将与特定状态相关的行为局部化
 * 2、它使得状态转换显示化
 * 3、State对象可被共享
 *
 * 状态模式的适用场景：
 * 1、一个对象的行为取决于它的状态，并且它必须在运行时刻根据状态改变它的行为
 * 2、一个操作中含有庞大的多分支的条件语句，且这些分支依赖于该对象的状态。
 * 这个状态通常用一个或多个枚举常量表示。通常，有多个操作包含这一相同的条件结构。
 * State模式模式将每一个条件分支放入一个独立的类中。
 * 这使得你可以要所对象自身的情况将对象的状态作为一个对象，
 * 这一对象可以不依赖于其他对象而独立变化
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/07/php-design-pattern-11-state/
 * @since 2014.9.9
 */
class MyState extends \DesignPattern\Singleton\BaseSingleton implements IState
{
    public function handle(Context $context)
    {
        echo __CLASS__ . " handle was called" . PHP_EOL;
        $context->setState(OtherState::getInstance());
    }
}
