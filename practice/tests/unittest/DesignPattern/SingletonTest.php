<?php
/**
 *  单例模式 测试用例
 */
class SingletonTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Singleton\SimpleSingleton',
            '\DesignPattern\Singleton\BaseSingleton',
            '\DesignPattern\Singleton\TraitSingleton',
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
        $expected = \DesignPattern\Singleton\SimpleSingleton::class;
        // 获取单例，实例化对象，执行work函数
        $actualInstance = \DesignPattern\Singleton\SimpleSingleton::getInstance();
        $this->assertInstanceOf($expected, $actualInstance);
        $actual   = $actualInstance->work();
        $this->assertTrue($actual);

        $expected = \DesignPattern\Singleton\BaseSingleton::class;
        // 获取单例，实例化对象，执行work函数
        $actualInstance = \DesignPattern\Singleton\BaseSingleton::getInstance();
        $this->assertInstanceOf($expected, $actualInstance);
        $actual   = $actualInstance->work();
        $this->assertTrue($actual);

        $expected = \DesignPattern\Singleton\TraitSingleton::class;
        // 获取单例，实例化对象，执行work函数
        $actualInstance = \DesignPattern\Singleton\TraitSingleton::getInstance();
        $this->assertInstanceOf($expected, $actualInstance);
        $actual   = $actualInstance->work();
        $this->assertTrue($actual);
    }

    /**
     * 捕获错误
     * @see https://phpunit.readthedocs.io/en/8.4/writing-tests-for-phpunit.html#testing-php-errors-warnings-and-notices
     */
    public function testCloneError()
    {
        // 获取单例
        $actual = \DesignPattern\Singleton\SimpleSingleton::getInstance();
        $this->expectErrorMessage("Call to private DesignPattern\Singleton\SimpleSingleton::__clone() from context 'SingletonTest'");
        $clone = clone $actual;
    }

    /**
     * 捕获错误
     * @see https://phpunit.readthedocs.io/en/8.4/writing-tests-for-phpunit.html#testing-php-errors-warnings-and-notices
     */
    public function testSerializeError()
    {
        // 获取单例
        $actual = \DesignPattern\Singleton\SimpleSingleton::getInstance();
        $this->expectError();
        $this->expectErrorMessage("Invalid callback DesignPattern\Singleton\SimpleSingleton::__sleep, cannot access private method DesignPattern\Singleton\SimpleSingleton::__sleep()");
        $serialize = serialize($actual);
    }

    /**
     * 捕获错误
     * @see https://phpunit.readthedocs.io/en/8.4/writing-tests-for-phpunit.html#testing-php-errors-warnings-and-notices
     */
    public function testUnSerializeError()
    {
        // 获取单例
        $actual = \DesignPattern\Singleton\SimpleSingleton::getInstance();
        $serialize = 'O:39:"DesignPattern\Singleton\SimpleSingleton":0:{}';
        $this->expectError();
        $this->expectErrorMessage("Invalid callback DesignPattern\Singleton\SimpleSingleton::__wakeup, cannot access private method DesignPattern\Singleton\SimpleSingleton::__wakeup()");
        $result = unserialize($serialize);
    }
}
