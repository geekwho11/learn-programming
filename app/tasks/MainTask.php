<?php

class MainTask extends \Phalcon\Cli\Task
{
    public function mainAction()
    {
        \Ding::run();
    }

}
