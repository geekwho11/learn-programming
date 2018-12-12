<?php
/**
 * Unit Test Case.
 *
 * @author GeekWho
 * @version 1.0.0
 * @since 2018.07.21
 *　@see https://docs.phalconphp.com/zh/latest/reference/unit-testing.html
 */
try {
    /**
     * Register the autoloader of composer.
     */
    $vendorLoader = dirname(__DIR__) . '/vendor/autoload.php';
    if (is_file($vendorLoader)) {
        $loader = require_once $vendorLoader;
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}
