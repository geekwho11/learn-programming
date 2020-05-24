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
    $loader = require $vendorLoader;
    $root = dirname(dirname($path));
    $classMaps = array(
        'Algorithm\\' => [
            $root . '/basic/Algorithm',
        ],
        'DataStructrue\\' => [
            $root . '/basic/DataStructrue',
        ],
        'DesignPattern\\' => [
            $root . '/methodology/DesignPattern/',
        ],
        '' => [$root . '/basic/'],
    );
    foreach ($classMaps as $namespace => $path) {
        $loader->setPsr4($namespace, $path);
    }
    $loader->register();
} catch (\Exception $e) {
    echo $e->getMessage();
}
