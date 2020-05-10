<?php
namespace DesignPattern\TemplateMethod\Demo;

abstract class Framework
{
    public function run()
    {
        $this->load();
    }

    /**
     * 抽象方法，子类必须实现
     */
    abstract protected function load();
}
