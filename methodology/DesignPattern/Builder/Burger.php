<?php

namespace DesignPattern\Builder;

/**
 * 汉堡默认用纸袋包装，必须实现价格函数
 */
abstract class Burger implements Item
{
    public function packing()
    {
        return new Wrapper();
    }

    public abstract function price();
}
