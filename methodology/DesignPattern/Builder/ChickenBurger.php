<?php

namespace DesignPattern\Builder;

/**
 * 鸡肉汉堡
 */
class ChickenBurger extends Burger
{
    public function name()
    {
        return "Chicken Burger";
    }

    public function price(){
        return 50;
    }
}
