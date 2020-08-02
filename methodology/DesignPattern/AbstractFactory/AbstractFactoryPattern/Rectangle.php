<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class Rectangle implements IShape
{
    public function draw(){
        echo "Inside Rectangle::draw() method.";
    }
}
