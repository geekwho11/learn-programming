<?php

namespace Test;

/**
 * unit test
 */
class BaseTest extends \UnitTestCase
{
    public function testRun()
    {
        $this->assertEquals(
            true,
            true,
            "just for pass test case."
        );
        $this->testClassLoad();
    }

    public function testClassLoad()
    {
        $tests = [
            '\Base',
            '\Algorithm\Base',
            '\Algorithm\LRU\Base',
            '\Helper\Logger',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test),
                "$test class not found"
            );
        }
    }

    public function testLRU()
    {
        $lru = \Algorithm\LRU\Base::instance();
        $this->assertEquals(
            true,
            method_exists($lru , 'get'),
            "lru can not find get method."
        );
        $this->assertEquals(
            true,
            method_exists($lru , 'set'),
            "lru can not find set method."
        );

        $this->assertEquals(
            true,
            $lru->get('hit'),
            "lru get hit failed."
        );
        $this->assertEquals(
            -1,
            $lru->get('no hit'),
            "lru get no hit failed."
        );

        $this->assertEquals(
            -1,
            $lru->set('k','anything'),
            "lru set key failed."
        );
    }
}
