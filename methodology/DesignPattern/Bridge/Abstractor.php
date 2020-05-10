<?php
namespace DesignPattern\Bridge;

/**
 * 抽象类
 */
abstract class Abstractor
{
    protected $object;

    public function operation()
    {
        $this->object->doit();
    }
}
