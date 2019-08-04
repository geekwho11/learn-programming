<?php
function __autoload($class)
{
    $dir = dirname(dirname(__DIR__));
    include_once $dir . '/src/Autoload/AutoCase.php';
}
AutoCase::run();
