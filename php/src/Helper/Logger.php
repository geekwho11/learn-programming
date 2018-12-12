<?php
namespace Helper;

class Logger
{
    public static function save($file, $msg)
    {
        $filename = BASE_PATH . '/data/logs/' . date('Ymd') . '/' . $file . '.md';
        is_dir($dir = dirname($filename)) or mkdir($dir, 0755, true);
        $return = file_put_contents($filename, $msg, FILE_APPEND | LOCK_EX);
        if (!$return) {
            echo date("Y-m-d H:i:s") . " write price to file failed. " . PHP_EOL;
            return ;
        }
    }
}
