<?php
/**
 * Unit Test Case.
 *
 * @author GeekWho
 * @version 1.0.0
 * @since 2018.07.21
 */
try {
    /**
     * Register the autoloader of composer.
     */
    $path = __DIR__;
    $vendorLoader = $path . '/vendor/autoload.php';
    if (!is_file($vendorLoader)){
        return;
    }
    $loader = require_once $vendorLoader;
    $root = dirname(dirname($path));
    $classMaps = array(
        'Algorithm\\' => [
            $root . '/basic/Algorithm',
            $root . '/basic/DataStructrue',
            $root . '/methodology/DesignPattern/',
        ],
    );
    foreach ($classMaps as $namespace => $path) {
        $loader->setPsr4($namespace, $path);
    }
    $loader->register();
} catch (\Exception $e) {
    echo $e->getMessage();
}
