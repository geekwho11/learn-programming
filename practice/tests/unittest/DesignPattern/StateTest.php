<?php
/**
 *  状态模式 测试用例
 */
class StateTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\State\IState',
            '\DesignPattern\State\Context',
            '\DesignPattern\State\MyState',
            '\DesignPattern\State\OtherState',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testState()
    {
        $output = 'DesignPattern\State\MyState handle was called
DesignPattern\State\OtherState handle was called
';
        $this->expectOutputString($output);
        $state   = \DesignPattern\State\MyState::getInstance();
        $context = new \DesignPattern\State\Context($state);
        $context->request();
        $state   = \DesignPattern\State\OtherState::getInstance();
        $context = new \DesignPattern\State\Context($state);
        $context->request();
    }
}
