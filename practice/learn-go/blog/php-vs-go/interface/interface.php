<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-24 15:45:49
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-24 15:46:14
 */
interface switchs {
    public function on();
    public function off();
}
class Light implements switchs
{
    public $status;
    public function __construct(){
    }
    public function on()
    {
        $this->status = 'light is on';
        echo $this->status . PHP_EOL;
    }
    public function off()
    {
        $this->status = 'light is off';
        echo $this->status . PHP_EOL;
    }
}
$light = new Light();
$light->on();
$light->off();
