<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class AbstractFactoryPatternDemo
{
    public function run(){
        $shapeFactory = FactoryProducer::getFactory('ShapeFactory');
        $shapeRectangle = $shapeFactory->getShape('Rectangle');
        $shapeRectangle->draw();
        $shapeSquare = $shapeFactory->getShape('Square');
        $shapeSquare->draw();

        $colorFactory = FactoryProducer::getFactory('ColorFactory');
        $redColor = $colorFactory->getColor('Red');
        $redColor->fill();
        $greenColor = $colorFactory->getColor('Green');
        $greenColor->fill();
    }
}
