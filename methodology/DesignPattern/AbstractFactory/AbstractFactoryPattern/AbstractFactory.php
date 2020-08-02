<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

abstract class AbstractFactory
{
    abstract function getColor($color);
    abstract function getShape($shape);
}
