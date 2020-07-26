<?php
/**
 *  原型模式 测试用例
 */
class PrototypeTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Prototype\IPrototype',
            '\DesignPattern\Prototype\Demo',
            '\DesignPattern\Prototype\PrototypeDemo',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testPrototype()
    {
        //对象的变量是以引用的方式引用的。
        $demo        = new \DesignPattern\Prototype\Demo();
        $demo->array = array(1,2);
        $proto_demo  = new \DesignPattern\Prototype\PrototypeDemo($demo);
        $copy_demo   = $proto_demo->copy();
        $this->assertEquals(
            $proto_demo->getDemo(),
            $copy_demo->getDemo(),
            "test getDemo failed."
        );
        $demo->array = array(3,4);
        $this->assertEquals(
            $proto_demo->getDemo(),
            $copy_demo->getDemo(),
            "test getDemo failed."
        );
    }
}
