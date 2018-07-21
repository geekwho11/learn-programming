<?php
extension_loaded('phalcon') or die('Phalcon framework extension is not installed');

use Phalcon\Di\FactoryDefault\Cli as CliDi;
use Phalcon\Cli\Console as ConsoleApp;

define('BASE_PATH', dirname(dirname(__DIR__)));
define('APP_PATH', BASE_PATH . '/app');

if (date_default_timezone_get() != 'Asia/Shanghai') {
    date_default_timezone_set('Asia/Shanghai');
}
set_time_limit(0);

/**
 * The FactoryDefault Dependency Injector automatically registers the services that
 * provide a full stack framework. These default services can be overidden with custom ones.
 */
$di = new CliDi();

/**
 * Include Services
 */
include APP_PATH . '/config/services.php';

/**
 * Get config service for use in inline setup below
 */
$config = $di->getConfig();

/**
 * Include Autoloader
 */
include APP_PATH . '/config/loader.php';


$vendorLoader = BASE_PATH . '/vendor/autoload.php';
if (is_file($vendorLoader)) {
    require_once $vendorLoader;
}
