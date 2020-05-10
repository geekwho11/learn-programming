<?php
namespace DesignPattern\TemplateMethod\Demo;

class WxApp extends Framework
{
    public function load()
    {
        echo __CLASS__ . " load config success." . PHP_EOL;
    }
}
