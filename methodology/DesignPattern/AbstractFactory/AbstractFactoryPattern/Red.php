<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class Red implements IColor
{
    public function fill(){
        echo "Inside Red::fill() method.";
    }
}
