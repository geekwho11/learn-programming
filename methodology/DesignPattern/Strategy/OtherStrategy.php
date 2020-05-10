<?php
namespace DesignPattern\Strategy;

class OtherStrategy implements IStrategy
{
    public function algorithmInterface()
    {
        echo __CLASS__ . ' algorithmInterface' . PHP_EOL;
    }
}
