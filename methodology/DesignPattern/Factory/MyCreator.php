<?php
namespace DesignPattern\Factory;

class MyCreator implements ICreator
{
    public function factory()
    {
        return new MyProduct();
    }
}
