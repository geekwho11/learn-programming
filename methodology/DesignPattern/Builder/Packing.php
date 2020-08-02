<?php

namespace DesignPattern\Builder;

/**
 * 包装接口，需要打包的话，必须实现
 */
interface Packing
{
    public function pack();
}
