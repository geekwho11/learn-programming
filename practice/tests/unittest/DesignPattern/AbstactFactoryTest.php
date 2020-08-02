<?php
/**
 *  抽象工厂模式 测试用例
 */
class AbstactFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\AbstractFactory\SimpleAbstractFactory\ObjectFactory',
            '\DesignPattern\AbstractFactory\SimpleAbstractFactory\Button',
            '\DesignPattern\AbstractFactory\SimpleAbstractFactory\Border',
            '\DesignPattern\AbstractFactory\SimpleAbstractFactory\MacButton',
            '\DesignPattern\AbstractFactory\SimpleAbstractFactory\MacBorder',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test),
                "$test class not found"
            );
        }
    }

    public function testSimpleAbstractFactory()
    {
        $object = new \DesignPattern\AbstractFactory\SimpleAbstractFactory\MacFactory();
        $this->expectOutputString('MacButtonMacBorder');
        $object->CreateButton();
        $object->CreateBorder();
    }

    public function testAbstractFactoryPattern()
    {
        $object = new \DesignPattern\AbstractFactory\AbstractFactoryPattern\AbstractFactoryPatternDemo();
        $this->expectOutputString('Inside Rectangle::draw() method.Inside Square::draw() method.Inside Red::fill() method.Inside Green::fill() method.');
        $object->run();
    }
}
