<?php
namespace DesignPattern\Factory\SimpleFactory;

class MyCreator implements ICreator
{
    public function factory()
    {
        return new MyProduct();
    }
}
