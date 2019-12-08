<?php
namespace DesignPattern\TemplateMethod;

/**
 *  PHP 模板方法模式
 * 目的：
 * 定义一个操作中的算法的骨架，而将一些步骤延迟到子类中。Template Method 使得子类可以在不改变一个算法的结构的情况下重定义该算法的某些特定的步骤
 *
 * 模板方法模式优点：
 * 模板方法是一种代码复用的基本技术，模板方法导致一种反射的控制结构，这指的是一个父类调用子类的操作。
 * 其实现过程：准备一个抽象类，将部分逻辑以具体方法以及具体构造子的形式实现，然后声明一些抽象方法来迫使子类实现* 剩余的逻辑。不同子类可以以不同的方式实现这些抽象方法，从而对剩余的逻辑有不同的实现。
 *
 * 模板方法模式的缺点：
 *
 *
 * 模板方法模式的适用场景：
 * 1、一次性实现一个算法的不变的部分，并将可变的行为留给子类来实现。
 * 2、各子类中公共的行为应被提取出来并集中到一个公共父类中以避免代码重复。
 * 3、控制子类扩展。
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/09/php-design-pattern-16-template-method/
 * @since 2014.9.10
 */

abstract class AbstractClass
{
    /**
     * 模板方法 调用基本方法组装顶层逻辑
     */
    public function templateMethod()
    {
        echo 'templateMethod begin.' . PHP_EOL;
        $this->primitiveOperation();
        echo 'templateMethod end.' . PHP_EOL;
    }

    /**
     * 抽象方法，子类必须实现
     */
    abstract protected function primitiveOperation();
}
