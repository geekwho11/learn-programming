<?php
/**
 *  工厂模式 测试用例
 */
class FactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Factory\ICreator',
            '\DesignPattern\Factory\MyCreator',
            '\DesignPattern\Factory\MyProduct',
            '\DesignPattern\Factory\IProduct',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testFactory()
    {
        $this->expectOutputString('DesignPattern\Factory\MyProduct operation was called');
        $object  = new \DesignPattern\Factory\MyCreator();
        $product = $object->factory();
        $product->operation();
    }
}
