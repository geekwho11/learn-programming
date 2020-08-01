<?php

namespace DesignPattern\Factory\FactoryPattern;

class Square implements IShape
{
    public function draw()
    {
        echo "Inside Square::draw() method.";
    }
}
