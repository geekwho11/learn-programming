<?php
namespace DesignPattern\Factory\FactoryPattern;

class Rectangle implements IShape
{
    public function draw(){
        echo "Inside Rectangle::draw() method.";
    }
}
