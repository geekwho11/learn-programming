<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-15 00:57:52
 */
namespace DataStructrue\LinkedList;

class DoublyLinkedListTest extends \PHPUnit\Framework\TestCase
{
    /**
     * 测试双向链表
     */
    public function testRun()
    {
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
