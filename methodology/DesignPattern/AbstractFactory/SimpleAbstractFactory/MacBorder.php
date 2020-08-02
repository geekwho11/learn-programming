<?php
namespace DesignPattern\AbstractFactory\SimpleAbstractFactory;

class MacBorder extends Border
{
    public function __construct()
    {
        echo "MacBorder";
    }
}
