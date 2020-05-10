<?php
namespace DesignPattern\Decorator;

/**
 *  PHP 装饰器模式
 *
 * 装饰模式的优点:
 * 1、比静态继承更灵活；
 * 2、避免在层次结构高层的类有太多的特征
 * 装饰模式的缺点：
 * 1、使用装饰模式会产生比使用继承关系更多的对象。
 * 并且这些对象看上去都很想像，从而使得查错变得困难。
 *
 * 装饰器适用场景：
 * 1、在不影响其他对象的情况下，以动态、透明的方式给单个对象添加职责。
 * 2、处理那些可以撤消的职责，即需要动态的给一个对象添加功能并且这些功能是可以动态的撤消的。
 * 3、当不能彩生成子类的方法进行扩充时。一种情况是，可能有大量独立的扩展，为支持每一种组合将产生大量的子类，使得子类数目呈爆炸性增长。
 * 另一种情况可能是因为类定义被隐藏，或类定义不能用于生成子类。
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/06/php-design-pattern-4-decorator/
 * @since 2014.9.9
 */
/**
 * 实际实现的抽象类
 */
class MyComponent implements IComponent
{
    public function operation()
    {
        echo __CLASS__ ." " .__FUNCTION__ . " was called" . PHP_EOL;
    }
}
