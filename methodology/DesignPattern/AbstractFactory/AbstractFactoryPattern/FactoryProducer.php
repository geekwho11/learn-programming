<?php

namespace DesignPattern\AbstractFactory\AbstractFactoryPattern;

class FactoryProducer
{
    public static function getFactory($factoryType){
        if (!$factoryType || !in_array($factoryType, ['ColorFactory', 'ShapeFactory'])) {
            return null;
        }
        $class = __NAMESPACE__ . "\\" . ucfirst($factoryType);
        if (class_exists($class)) {
            return new $class;
        }
        return null;
    }
}
