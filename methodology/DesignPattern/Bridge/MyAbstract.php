<?php
namespace DesignPattern\Bridge;

/**
 *  PHP 桥接模式
 *
 * 桥接模式优点：
 * 1、分离接口及其实现部分
 *   将Abstraction与Implementor分享有助于降低对实现部分编译时刻的依赖性
 *   接口与实现分享有助于分层，从而产生更好的结构化系统
 * 2、提高可扩充性
 * 3、实现细节对客户透明。
 *
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/06/php-design-pattern-5-bridge/
 * @since 2014.9.5
 */
/**
 * 实际实现的抽象类
 */
class MyAbstract extends Abstractor
{
    public function __construct(Implementor $object)
    {
        $this->object = $object;
    }

    public function operation()
    {
        echo "MyAbstract doing" . PHP_EOL;
        $this->object->doit();
    }
}
