<?php

namespace DesignPattern\Builder;

/**
 * 汉堡用纸袋打包
 */
class Wrapper implements Packing
{
    public function pack()
    {
        return "Wrapper";
    }
}
