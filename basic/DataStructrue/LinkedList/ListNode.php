<?php

/**
 * @Author: GeekWho
 * @Date:   2018-07-22 18:32:10
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-22 18:32:41
 */
namespace DataStructrue\LinkedList;

class ListNode
{
    public $data = null;
    public $next = null;
    public $prev = null;

    public function __construct(string $data = null)
    {
        $this->data = $data;
    }
}
