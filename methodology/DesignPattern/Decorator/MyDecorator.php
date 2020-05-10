<?php
namespace DesignPattern\Decorator;

class MyDecorator extends Decorator
{
    public function operation()
    {
        parent::operation();
        $this->customOperation();
    }

    public function customOperation()
    {
        echo __CLASS__ ." " .__FUNCTION__ . " was called" . PHP_EOL;
    }
}
