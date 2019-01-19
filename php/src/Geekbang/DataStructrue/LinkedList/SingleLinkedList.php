<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-07 20:37:51
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-07 22:07:27
 */
namespace Geekbang\DataStructrue\LinkedList;

class SingleLinkedList extends Base
{
    public $head   = null;
    public $last   = null;
    public $length = 0;
    /**
     * 插入元素
     * 1. 判断是否头节点，如果是直接赋值头结点和尾节点即可。
     * 2. 如果头结点有值，那么直接找到最后一个节点，链接到一个新的节点上。
     */
    public function insert($value)
    {
        if($this->head === null){
            $list       = new \DataStructrue\LinkedList\ListNode($value);
            $this->head = $list;
            $this->last = $list;
            $this->length++;
            return $this->length;
        }
        if($this->last !== null){
            $list              = new \DataStructrue\LinkedList\ListNode($value);
            $currentNode       = $this->last;
            $this->last        = $list;
            $currentNode->next = $list;
            $this->length++;
            return $this->length;
        }
    }

    /**
     * 反转
     *
     * 最简单的反转方式，就从头节点后一个节点开始反转,head节点变成最后一个节点
     * 以0,1,2三个节点为例。0为头节点。指向为0->1->2
     *
     * 1. 先把0节点的next节点，也就是1节点，保存在变量node。
     * 2. 保存0节点在head变量
     * 3. 断开0节点的next节点，置为null
     * 4. 保存0节点为上一个节点prenode变量
     * 5. 从1节点开始循环
     * 6. 保存1节点的next节点，也就是2节点，在变量next
     * 7. 将1节点的next指向prenode，也就是0节点。
     * 8. 将prenode变量指向1节点。
     * 9. 将node变量指向2节点。
     * 10. 将变量存储的prenode节点里最后一个节点指向head类变量
     */
    public function reverse()
    {
        // 从head节点后面一个节点开始循环
        $node = $this->head->next;
        // 保存head节点
        $head = $this->head;
        // 断开head的next指向
        $head->next = null;
        // 保存上一节点
        $prenode = $head;
        while($node !== null && --$this->length){
            // 当前节点的后一个节点
            $next = $node->next;
            // 反转操作
            $node->next = $prenode;
            // 记录上一个节点
            $prenode = $node;
            //移动到下一个节点
            $node = $next;
        }
        // 将尾节点指向head类变量
        $this->head = $prenode;
    }

    /**
     * 转化为数组
     */
    public function toArray()
    {
        $data = [];
        $node = $this->head;
        while($node !== null && $this->length--){
            $data[] = $node->data;
            $node   = $node->next;
        }
        return $data;
    }
}
