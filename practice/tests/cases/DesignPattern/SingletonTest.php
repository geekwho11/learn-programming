<?php
/**
 *  单例模式 测试用例
 */
class SingletonTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
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
    }

    public function testInstance()
    {
        $expected = \DesignPattern\Singleton\Base::class;
        // 获取单例
        $actual = \DesignPattern\Singleton\Base::instance();
        $this->assertInstanceOf($expected, $actual);
        // 获取单例
        $actual = \DesignPattern\Singleton\Base::getInstance();
        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * 捕获错误
     * @see https://phpunit.readthedocs.io/en/8.4/writing-tests-for-phpunit.html#testing-php-errors-warnings-and-notices
     */
    public function testCloneError()
    {
        // 获取单例
        $actual = \DesignPattern\Singleton\Base::instance();
        $this->expectErrorMessage("Call to private DesignPattern\Singleton\Base::__clone() from context 'SingletonTest'");
        $clone = clone $actual;
    }

    /**
     * 捕获错误
     * @see https://phpunit.readthedocs.io/en/8.4/writing-tests-for-phpunit.html#testing-php-errors-warnings-and-notices
     */
    public function testSerializeError()
    {
        // 获取单例
        $actual = \DesignPattern\Singleton\Base::instance();
        $this->expectError();
        $this->expectErrorMessage("Invalid callback DesignPattern\Singleton\Base::__sleep, cannot access private method DesignPattern\Singleton\Base::__sleep()");
        $serialize = serialize($actual);
    }

    /**
     * 捕获错误
     * @see https://phpunit.readthedocs.io/en/8.4/writing-tests-for-phpunit.html#testing-php-errors-warnings-and-notices
     */
    public function testUnSerializeError()
    {
        $this->markTestSkipped('This test was skipped because test case imcomplete.');
    }

    /**
     * 实例化对象，执行work函数
     */
    public function testSingleton()
    {
        // 获取单例
        $instance = \DesignPattern\Singleton\Base::instance();
        $actual   = $instance->work();
        $this->assertTrue($actual);
    }
}
