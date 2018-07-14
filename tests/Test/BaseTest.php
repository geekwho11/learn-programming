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
}
