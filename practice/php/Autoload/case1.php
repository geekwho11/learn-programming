<?php
function __autoload($class)
{
    $dir = __DIR__;
    include_once $dir . "/{$class}.php";
}
AutoCase::run();
