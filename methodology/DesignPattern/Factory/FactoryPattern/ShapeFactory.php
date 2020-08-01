<?php
namespace DesignPattern\Factory\FactoryPattern;

class ShapeFactory
{
    public function getShape($shapeType){
        if (!$shapeType) {
            return null;
        }
        $class = __NAMESPACE__ . "\\" . ucfirst($shapeType);
        if (class_exists($class)) {
            return new $class;
        }
        return null;
    }
}
