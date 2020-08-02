<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class ColorFactory extends AbstractFactory
{
    public function getShape($shapeType){
        return null;
    }

    public function getColor($colorType){
        if (!$colorType|| !in_array($colorType, ['Red', 'Green'])) {
            return null;
        }
        $class = __NAMESPACE__ . "\\" . ucfirst($colorType);
        if (class_exists($class)) {
            return new $class;
        }
    }
}
