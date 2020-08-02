<?php

namespace DesignPattern\Builder;
/**
 * 饮料默认用瓶子打包
 */
abstract class ColdDrink implements Item
{
    public function packing()
    {
        return new Bottle();
    }

    public abstract function price();
}
