<?php
namespace DesignPattern\State;

class OtherState extends \DesignPattern\Singleton\BaseSingleton implements IState
{
    public function handle(Context $context)
    {
        echo __CLASS__ . " handle was called" . PHP_EOL;
        $context->setState(MyState::getInstance());
    }
}
