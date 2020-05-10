<?php
namespace DesignPattern\State;

class Context
{
    private $state;
    
    public function __construct(IState $state)
    {
        $this->state = $state;
    }

    public function setState(IState $state)
    {
        $this->state = $state;
    }

    public function request()
    {
        $this->state->handle($this);
    }
}
