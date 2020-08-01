<?php
/**
 *  工厂模式 测试用例
 */
class FactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Factory\SimpleFactory\ICreator',
            '\DesignPattern\Factory\SimpleFactory\MyCreator',
            '\DesignPattern\Factory\SimpleFactory\MyProduct',
            '\DesignPattern\Factory\SimpleFactory\IProduct',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testSimpleFactory()
    {
        $this->expectOutputString('DesignPattern\Factory\SimpleFactory\MyProduct operation was called');
        $object  = new \DesignPattern\Factory\SimpleFactory\MyCreator();
        $product = $object->factory();
        $product->operation();
    }

    public function testFactoryPattern()
    {
        $this->expectOutputString('Inside Rectangle::draw() method.Inside Square::draw() method.');
        $object  = new \DesignPattern\Factory\FactoryPattern\FactoryPatternDemo();
        $object->run();
    }
}
