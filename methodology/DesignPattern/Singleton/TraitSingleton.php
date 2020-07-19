<?php
namespace DesignPattern\Singleton;

/**
 * 设计模式之单例模式
 * 保证一个类仅有一个实例，并且提供一个访问它的全局访问
 * 单例模式的特点：
 * 1. 一个类只有一个实例
 * 2. 必须自己创建这个实例
 * 3. 向其他类提供访问这个实例的函数
 *
 * @author GeekWho <geekwho@xbc.me>
 * @since 2014.9.5
 */
class TraitSingleton
{
    use CommonTrait;

    /**
     * 可执行的方法
     */
    public function work()
    {
        return true;
    }
}
