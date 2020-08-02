<?php

namespace DesignPattern\Builder;

/**
 * 饮料用瓶子打包
 */
class Bottle implements Packing
{
    public function pack()
    {
        return "Bottle";
    }
}
