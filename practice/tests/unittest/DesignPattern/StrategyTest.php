<?php
/**
 *  策略模式 测试用例
 */
class StrategyTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Strategy\MyStrategy',
            '\DesignPattern\Strategy\OtherStrategy',
            '\DesignPattern\Strategy\IStrategy',
            '\DesignPattern\Strategy\Context',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testStrategy()
    {
        $this->expectOutputString('DesignPattern\Strategy\MyStrategy algorithmInterface
DesignPattern\Strategy\OtherStrategy algorithmInterface
');
        $strategy = new \DesignPattern\Strategy\MyStrategy();
        $context  = new \DesignPattern\Strategy\Context($strategy);
        $context->contextInterface();
 
        $strategy = new \DesignPattern\Strategy\OtherStrategy();
        $context  = new \DesignPattern\Strategy\Context($strategy);
        $context->contextInterface();
    }
}
