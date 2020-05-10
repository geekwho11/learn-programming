<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-24 15:44:38
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-24 15:44:48
 */
class HelloWorld
{
    public $x;
    public $y;
    public function __construct($x , $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function run()
    {
        echo sqrt($this->x * $this->x + $this->y * $this->y);
    }
}
(new HelloWorld(3,4))->run();
