<?php

$loader = new \Phalcon\Loader();
$loader->registerDirs([
    APP_PATH . '/tasks',
    APP_PATH . '/models',
    APP_PATH . '/business',
    BASE_PATH . '/tests',
]);
$loader->register();

$config = [
    'api' => true,
];
foreach ($config as $file => $enabled) {
    if ($enabled && file_exists(APP_PATH . "/library/{$file}.php")) {
        require_once APP_PATH . "/library/{$file}.php";
    }
}
