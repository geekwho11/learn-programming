<?php

namespace DesignPattern\Builder;

/**
 * 素食汉堡
 */
class Coke extends ColdDrink
{
    public function name()
    {
        return "Coke";
    }

    public function price(){
        return 30;
    }
}
