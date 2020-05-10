<?php
/**
 *  模板方法 测试用例
 */
class TemplateMethodTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\TemplateMethod\AbstractClass',
            '\DesignPattern\TemplateMethod\MyClass',
            '\DesignPattern\TemplateMethod\Demo\Framework',
            '\DesignPattern\TemplateMethod\Demo\App',
            '\DesignPattern\TemplateMethod\Demo\WebApp',
            '\DesignPattern\TemplateMethod\Demo\MobileApp',
            '\DesignPattern\TemplateMethod\Demo\WxApp',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testTemplateMethod()
    {
        $this->expectOutputString('templateMethod begin.
primitiveOperation
templateMethod end.
');
        $object  = new \DesignPattern\TemplateMethod\MyClass();
        $product = $object->templateMethod();
    }

    public function testTemplateMethodFramework()
    {
        $this->expectOutputString('DesignPattern\TemplateMethod\Demo\App load config success.
DesignPattern\TemplateMethod\Demo\MobileApp load config success.
DesignPattern\TemplateMethod\Demo\WebApp load config success.
DesignPattern\TemplateMethod\Demo\WxApp load config success.
');
        // 执行demo测试用例
        $object  = new \DesignPattern\TemplateMethod\Demo\App();
        $product = $object->run();
        $object  = new \DesignPattern\TemplateMethod\Demo\MobileApp();
        $product = $object->run();
        $object  = new \DesignPattern\TemplateMethod\Demo\WebApp();
        $product = $object->run();
        $object  = new \DesignPattern\TemplateMethod\Demo\WxApp();
        $product = $object->run();
    }
}
