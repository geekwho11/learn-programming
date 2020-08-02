<?php
/**
 *  建造者模式 测试用例
 */
class BuilderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * 执行测试
     */
    public function testBuilder()
    {
        // 获取单例
        $instance = new \DesignPattern\Builder\BuilderPatternDemo();
        $this->expectOutputString(',Item : Veg Burger,Packing : Wrapper,Price : 25,Item : Coke,Packing : Bottle,Price : 30Total Cost: 55,Item : Chicken Burger,Packing : Wrapper,Price : 50,Item : Pepsi,Packing : Bottle,Price : 35Total Cost: 85');
        $instance->run();
    }
}
