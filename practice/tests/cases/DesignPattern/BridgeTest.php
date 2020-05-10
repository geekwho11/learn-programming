<?php
/**
 *  桥接模式 测试用例
 */
class BridgeTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Bridge\Abstractor',
            '\DesignPattern\Bridge\Implementor',
            '\DesignPattern\Bridge\MyAbstract',
            '\DesignPattern\Bridge\MyImplementor',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testBridge()
    {
        $this->expectOutputString('MyAbstract doing
class MyImplementor doit function
');
        $object = new \DesignPattern\Bridge\MyAbstract(new \DesignPattern\Bridge\MyImplementor());
        $object->operation();
    }
}
