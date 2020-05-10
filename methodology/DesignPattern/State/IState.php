<?php
namespace DesignPattern\State;

interface IState
{
    public function handle(Context $context);
}
