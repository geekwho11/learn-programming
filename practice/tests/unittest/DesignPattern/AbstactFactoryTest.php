<?php
/**
 *  抽象工厂模式 测试用例
 */
class AbstactFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\AbstractFactory\ObjectFactory',
            '\DesignPattern\AbstractFactory\Button',
            '\DesignPattern\AbstractFactory\Border',
            '\DesignPattern\AbstractFactory\MacButton',
            '\DesignPattern\AbstractFactory\MacBorder',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test),
                "$test class not found"
            );
        }
    }

    public function testAbstactFactory()
    {
        $object = new \DesignPattern\AbstractFactory\MacFactory();
        $this->expectOutputString('MacButtonMacBorder');
        $object->CreateButton();
        $object->CreateBorder();
    }
}
