<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class Green implements IColor
{
    public function fill(){
        echo "Inside Green::fill() method.";
    }
}
