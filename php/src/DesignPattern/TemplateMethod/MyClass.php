<?php
namespace DesignPattern\TemplateMethod;

class MyClass extends AbstractClass
{
    /**
     * 基本方法
     */
    protected function primitiveOperation()
    {
        echo 'primitiveOperation' . PHP_EOL;
    }
}
