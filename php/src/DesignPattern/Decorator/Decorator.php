<?php
namespace DesignPattern\Decorator;

abstract class Decorator implements IComponent
{
    protected $_component;

    public function __construct(IComponent $component)
    {
        $this->_component = $component;
    }

    public function operation()
    {
        $this->_component->operation();
    }
}
