<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-15 00:55:13
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-15 00:56:09
 */
namespace Algorithm\LRU;

class BaseTest extends \PHPUnit\Framework\TestCase
{
    /**
     * test lru algorithm
     * @see https://leetcode.com/problems/lru-cache/
     */
    public function testRun()
    {
        $lru = \Algorithm\LRU\Base::instance();
        $this->assertEquals(
            true,
            method_exists($lru, 'get'),
            "lru can not find get method."
        );
        $this->assertEquals(
            true,
            method_exists($lru, 'set'),
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
            $lru->set('k', 'anything'),
            "lru set key failed."
        );
    }
}
