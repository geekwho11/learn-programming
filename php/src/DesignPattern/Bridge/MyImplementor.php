<?php
namespace DesignPattern\Bridge;

class MyImplementor extends Implementor
{
    public function doit()
    {
        echo "class MyImplementor doit function" . PHP_EOL;
    }
}
