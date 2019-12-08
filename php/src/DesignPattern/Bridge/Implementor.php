<?php
namespace DesignPattern\Bridge;

/**
 * 抽象类，必须实现doit方法
 */
abstract class Implementor
{
    abstract public function doit();
}
