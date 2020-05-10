<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-24 15:47:09
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-24 17:29:05
 */
$autoload = dirname(__DIR__) . DIRECTORY_SEPARATOR . "vendor/autoload.php";
if(file_exists($autoload)){
    include_once $autoload;
}
class PHPTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            '\stdClass',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test),
                "$test class not found"
            );
        }
    }
}
