<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-07 20:39:17
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-07 21:51:00
 */

namespace Geekbang\DataStructrue\LinkedList;

class SingleLinkedListTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        //单链表反转
        $tests = [
            'case1' => [
                'input'  => [1,2,3,4,5,6,7],
                'output' => [7,6,5,4,3,2,1],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $list   = \Geekbang\DataStructrue\LinkedList\SingleLinkedList::instance();
            $this->assertEquals(
                true,
                is_object($list),
                "SingleLinkedList instance falied."
            );
            foreach ($input as $value) {
                $list->insert($value);
            }
            $return = $list->toArray();
            $this->assertEquals(
                true,
                $return == $input,
                "run test $key toArray failed."
            );
            $list->reverse();
            $return = $list->toArray();
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key reverse failed."
            );
        }
    }
}
