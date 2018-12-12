<?php
/**
 * @Author: GeekWho
 * @Date:   2018-07-15 21:42:32
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-22 17:53:31
 */

namespace DataStructrue\Queue;

class DoubleQueue extends Base
{
    public $length=0;
    public $array =[];
    //队首出栈
    public function getFirst()
    {
        if ($this->array) {
            return array_shift($this->array);
        }
    }

    //队首入栈
    public function setFirst($e)
    {
        return array_unshift($this->array, $e);
    }

    //队尾出栈
    public function getLast()
    {
        if ($this->array) {
            return array_pop($this->array);
        }
    }

    //队尾入栈
    public function setLast($e)
    {
        return array_push($this->array, $e);
    }

    //获取队列全部元素
    public function get()
    {
        return $this->array;
    }
    public static function run()
    {
        $q = self::instance();
        $q->setLast('last');
        var_dump($q->get());
        $q->setFirst('first');
        var_dump($q->get());
        $q->setFirst('first0');
        var_dump($q->get());
    }
}
