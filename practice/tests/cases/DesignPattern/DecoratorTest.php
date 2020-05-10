<?php
/**
 *  装饰器模式 测试用例
 */
class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Decorator\Decorator',
            '\DesignPattern\Decorator\IComponent',
            '\DesignPattern\Decorator\MyComponent',
            '\DesignPattern\Decorator\MyDecorator',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testDecorator()
    {
        $this->expectOutputString('DesignPattern\Decorator\MyComponent operation was called
DesignPattern\Decorator\MyDecorator customOperation was called
');
        $component = new \DesignPattern\Decorator\MyComponent();
        $decorator = new \DesignPattern\Decorator\MyDecorator($component);
        $decorator->operation();
    }
}
