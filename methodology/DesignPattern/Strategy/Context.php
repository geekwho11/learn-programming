<?php
namespace DesignPattern\Strategy;

class Context
{
    /* 引用的策略 */
    private $strategy;

    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function contextInterface()
    {
        $this->strategy->algorithmInterface();
    }
}
