<?php

namespace DesignPattern\Builder;

/**
 * 素食汉堡
 */
class Pepsi extends ColdDrink
{
    public function name()
    {
        return "Pepsi";
    }

    public function price(){
        return 35;
    }
}
