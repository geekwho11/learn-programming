<?php
/**
 * @Author: GeekWho
 * @Date:   2018-07-15 21:42:32
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-21 20:43:51
 */

namespace DataStructrue\LinkedList;

class DoublyLinkedList extends Base
{
    private $_firstNode = null;
    private $_lastNode  = null;
    private $_totalNode = 0;

    public function insert($data, $position = 'before')
    {
        $position = $position != "before" && $position != "after"?"before":$position;
        $node     = new ListNode($data);
        if ($this->_firstNode === null) {
            $this->_firstNode = $node;
            $this->_lastNode  = $node;
            $this->_totalNode++;
            return true;
        }
        if ($position == "before" && $this->_firstNode !== null) {
            $currentNode       = $this->_firstNode;
            $this->_firstNode  = $node;
            $node->next        = $currentNode;
            $currentNode->prev = $node;
        }
        if ($position == "after" && $this->_lastNode !== null) {
            $currentNode       = $this->_lastNode;
            $this->_lastNode   = $node;
            $node->prev        = $currentNode;
            $currentNode->next = $node;
        }

        $this->_totalNode++;
        return true;
    }

    public function find($data)
    {
        if (!$data || $this->_firstNode === null) {
            return false;
        }
        $currentNode = $this->_firstNode;
        while ($currentNode !== null) {
            if ($currentNode->data === $data) {
                return $currentNode;
            }
            $currentNode = $currentNode->next;
        }
        return false;
    }

    public function delete($data)
    {
        $node = $this->find($data);
        if (!$node || !isset($node->prev) || !isset($node->next)) {
            return false;
        }
        $prev = $node->prev;
        $next = $node->next;
        if ($prev === null && $next === null) {
            return false;
        }
        //first node
        if ($prev === null && $next) {
            $node->next->prev = null;
        }
        //last node
        if ($next === null && $prev) {
            $node->prev->next = null;
        }
        if ($prev && $next) {
            $node->prev->next = $node->next;
            $node->next->prev = $node->prev;
        }
        $this->_totalNode--;
        unset($node);
        return true;
    }

    public function fetch($type = "asc")
    {
        $node        = [];
        $currentNode = $type == "asc" ?$this->_firstNode:$this->_lastNode;
        while ($currentNode !== null) {
            $node[] = $currentNode->data;
            //echo $currentNode->data . ' ';
            $currentNode = $type == "asc" ?$currentNode->next:$currentNode->prev;
        }
        return $node;
        //echo PHP_EOL;
        //echo "total node is " . $this->_totalNode . PHP_EOL;
        //echo "first node is " . $this->_firstNode->data . PHP_EOL;
        //echo "last node is " . $this->_lastNode->data . PHP_EOL;
    }

    public function getSize()
    {
        return $this->_totalNode;
    }
}
