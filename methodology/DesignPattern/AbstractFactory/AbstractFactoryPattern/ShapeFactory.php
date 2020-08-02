<?php
namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class ShapeFactory extends AbstractFactory
{
    public function getShape($shapeType){

        if (!$shapeType || !in_array($shapeType, ['Square', 'Rectangle'])) {
            return null;
        }
        $class = __NAMESPACE__ . "\\" . ucfirst($shapeType);
        if (class_exists($class)) {
            return new $class;
        }
        return null;
    }

    public function getColor($colorType){
        return null;
    }
}
