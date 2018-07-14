<?php

use Phalcon\Test\UnitTestCase as PhalconTestCase;

abstract class UnitTestCase extends PhalconTestCase
{
    public function setUp(Phalcon\DiInterface $di = null, Phalcon\Config $config = null)
    {
    }

    protected function tearDown()
    {
    }

    /**
     * Check if the test case is setup properly.
     *
     * @throws \PHPUnit_Framework_IncompleteTestError;
     */
    public function __destruct()
    {
    }
}
