<?php
function __autoload($class)
{
    $dir = dirname(dirname(__DIR__));
    include_once $dir . '/src/Autoload/AutoCase.php';
}
spl_autoload_register(function ($class) {
    $dir = dirname(dirname(__DIR__));
    include_once $dir . '/src/Autoload/SplCase.php';
});
AutoCase::run();
