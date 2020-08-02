<?php

namespace DesignPattern\Builder;

/**
 * 表示食物名字，包装，价格等信息
 */
interface Item
{
    public function name();
    public function packing();
    public function price();
}
