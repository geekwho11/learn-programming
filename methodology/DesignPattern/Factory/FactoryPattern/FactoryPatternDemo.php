<?php
namespace DesignPattern\Factory\FactoryPattern;

class FactoryPatternDemo
{
    public function run(){
        $shapeFactory = new ShapeFactory();
        $shapeRectangle = $shapeFactory->getShape('Rectangle');
        $shapeRectangle->draw();
        $shapeSquare = $shapeFactory->getShape('Square');
        $shapeSquare->draw();
    }
}
