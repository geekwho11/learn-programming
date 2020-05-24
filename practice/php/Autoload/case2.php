<?php
spl_autoload_register(function ($class) {
    $dir = __DIR__;
    include_once $dir . "/{$class}.php";
});
AutoCase::run();
