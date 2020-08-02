<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class Square implements IShape
{
    public function draw()
    {
        echo "Inside Square::draw() method.";
    }
}
