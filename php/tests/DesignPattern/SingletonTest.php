<?php
/**
 *  单例模式 测试用例
 */
class SingletonTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            '\DesignPattern\Singleton\Base',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test),
                "$test class not found"
            );
        }
        $expected = \DesignPattern\Singleton\Base::class;
        // 获取单例
        $actual = \DesignPattern\Singleton\Base::instance();
        $this->assertInstanceOf($expected, $actual);
        // 获取单例
        $actual = \DesignPattern\Singleton\Base::getInstance();
        $this->assertInstanceOf($expected, $actual);
    }
}
