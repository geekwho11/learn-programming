<?php
namespace DesignPattern\State;

class OtherState extends \DesignPattern\Singleton\Base implements IState
{
    public function handle(Context $context)
    {
        echo __CLASS__ . " handle was called" . PHP_EOL;
        $context->setState(MyState::instance());
    }
}
