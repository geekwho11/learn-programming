<?php
namespace DesignPattern\Observer;

class MyObserver implements IObserver
{
    public $name ;
    public function __construct($name)
    {
        $this->name = $name;
        echo __CLASS__ . ' init name = ' . $this->name . PHP_EOL;
    }

    public function update()
    {
        echo __CLASS__ . ' update name = ' . $this->name . PHP_EOL;
    }
}
