<?php

namespace DesignPattern\Builder;

/**
 * 素食汉堡
 */
class VegBurger extends Burger
{
    public function name()
    {
        return "Veg Burger";
    }

    public function price(){
        return 25;
    }
}
