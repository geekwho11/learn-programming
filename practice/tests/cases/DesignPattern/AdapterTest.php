<?php
/**
 *  适配器模式 测试用例
 */
class AdapterTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Adapter\IAdapter',
            '\DesignPattern\Adapter\MyAdapter',
            '\DesignPattern\Adapter\OtherAdapter',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    /**
     * 执行测试
     */
    public function testMyAdapter()
    {
        // 获取单例
        $instance = new \DesignPattern\Adapter\MyAdapter();
        $this->expectOutputString('OtherAdapter method1 was called
MyAdapter method2 was called
');
        $instance->method1();
        $instance->method2();
    }
}
