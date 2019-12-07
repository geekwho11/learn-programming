<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-15 00:44:02
 */
namespace DataStructrue\Queue;

class DoubleQueueTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $q    = \DataStructrue\Queue\DoubleQueue::instance();
        $key1 = "last";
        $q->setLast($key1);
        $return = $q->get();
        $this->assertEquals(
            true,
            $return == [$key1],
            sprintf(
                "run test $key1 failed. return %s",
                var_export($return, true)
            )
        );
        $key2 = "first";
        $q->setFirst($key2);
        $return = $q->get();
        $this->assertEquals(
            true,
            $return == [$key2,$key1],
            sprintf(
                "run test $key2 failed. return %s",
                var_export($return, true)
            )
        );
        $key3 = "first0";
        $q->setFirst($key3);
        $return = $q->get();
        $this->assertEquals(
            true,
            $return == [$key3,$key2,$key1],
            sprintf(
                "run test $key3 failed. return %s",
                var_export($return, true)
            )
        );

        $debug = false;
        if ($debug) {
            (new \DataStructrue\Queue\DoubleQueue)->test();
        }
    }
}
