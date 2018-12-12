<?php

/**
 * unit test
 */
class BaseTest extends \PHPUnit\Framework\TestCase
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

    /**
     * test lru algorithm
     * @see https://leetcode.com/problems/lru-cache/
     */
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

    /**
     * 测试双向链表
     */
    public function testDoublyLinkedList()
    {
        $this->testClassLoad();
        $list = \DataStructrue\LinkedList\DoublyLinkedList::instance();
        $this->assertEquals(
            true,
            is_object($list),
            "DoublyLinkedList instance falied."
        );
        $list->insert('one' , 'before');
        $list->insert('two', 'before');
        $list->insert('three', 'before');
        $this->assertEquals(
            3,
            $list->getSize(),
            "insert before falied."
        );
        $return = $list->fetch();
        $this->assertEquals(
            ['three','two', 'one'],
            $return,
            "fetch data error."
        );
        //var_dump($list);

        $list->insert('four' , 'after');
        $list->insert('five', 'after');
        $list->insert('six', 'after');
        $this->assertEquals(
            6,
            $list->getSize(),
            "insert after falied."
        );
        $return = $list->fetch();
        $this->assertEquals(
            ['three','two', 'one', 'four', 'five', 'six'],
            $return,
            "fetch data error."
        );
        //var_dump($list);
        $return = $list->find('six');
        $this->assertEquals(
            true,
            is_object($return),
            "find fix falied."
        );
        $return = $list->delete('four');
        $this->assertEquals(
            true,
            $return,
            "delete four falied."
        );
        $this->assertEquals(
            5,
            $list->getSize(),
            "delete four falied."
        );
        $return = $list->fetch();
        $this->assertEquals(
            ['three','two', 'one', 'five', 'six'],
            $return,
            "fetch data error."
        );
    }
}
