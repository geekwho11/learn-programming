<?php
/**
 * LRU算法
 *
 * @Author: GeekWho
 * @Date:   2018-07-14 17:59:05
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-14 19:32:09
 * @see  https://yikun.github.io/2015/04/03/%E5%A6%82%E4%BD%95%E8%AE%BE%E8%AE%A1%E5%AE%9E%E7%8E%B0%E4%B8%80%E4%B8%AALRU-Cache%EF%BC%9F/
 * @see https://songlee24.github.io/2015/05/10/design-LRU-Cache/
 */

namespace Algorithm\LRU;

class Base extends \Algorithm\Base
{
    public function get($k)
    {
        if($k == 'no hit') return -1;
        return true;
    }

    public function set($k , $v)
    {
        return true;
    }
}
