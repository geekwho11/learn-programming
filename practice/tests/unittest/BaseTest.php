<?php

/**
 * unit test
 */
class BaseTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            '\Base',
            '\Algorithm\Base',
            '\Algorithm\LRU\Base',
            '\Algorithm\Sort\Base',
            '\Algorithm\Sort\BubbleSort',
            '\Algorithm\Sort\QuickSort',
            '\Algorithm\Sort\SelectSort',
            '\Algorithm\Sort\MergeSort',
            '\Algorithm\Sort\HeapSort',

            '\Algorithm\Search\Base',
            '\Algorithm\Search\Binary',

            '\Algorithm\String\Base',
            '\Algorithm\String\Reverse',

            '\DataStructrue\Base',
            '\DataStructrue\LinkedList\Base',
            '\DataStructrue\LinkedList\DoublyLinkedList',
            '\DataStructrue\Queue\Base',
            '\DataStructrue\Queue\DoubleQueue',

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
