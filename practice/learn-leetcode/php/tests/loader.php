<?php
/**
 * 加载器
 * @Author: geekwho
 * @Date:   2018-09-20 01:42:18
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-05 01:14:23
 */
try {
    /**
     * Register the autoloader of composer.
     */
    $vendorLoader = dirname(__DIR__) . '/vendor/autoload.php';
    if (is_file($vendorLoader)) {
        $loader = require_once $vendorLoader;
        // 添加查找目录
        $target =dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src';
        $dirs   = [];
        $dh     = opendir($target);
        while (($file = readdir($dh)) !== false) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $dir = $target . DIRECTORY_SEPARATOR . $file;
            if(is_dir($dir)){
                $dirs[] = $dir;
            }
        }
        spl_autoload_register(function($class) use ($dirs) {
            foreach ($dirs as $dir) {
                $file = $dir . DIRECTORY_SEPARATOR . $class. '.php';
                if(file_exists($file)){
                    include "$file";
                }
            }
        });
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}

