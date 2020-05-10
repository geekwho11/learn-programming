<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-03 01:39:14
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-12 20:34:27
 */
class twoSum
{
    /**
     * 复杂度分析
     * O(n^2)
     */
    public function run($input , $target)
    {
        if(!is_array($input))
        {
            return "请输入数组";
        }
        foreach ($input as $k1 => $v1) {
            foreach ($input as $k2 => $v2) {
                if($v1 + $v2 == $target){
                    return [$k1,$k2];
                }
            }
        }
        return "未找到对应的元素";
    }

    /**
     * 复杂度分析
     * O(n)
     */
    public function run1($input , $target)
    {
        if(!is_array($input))
        {
            return "请输入数组";
        }
        foreach ($input as $k1 => $v1) {
            $v  = $target - $v1;
            $k2 = array_search($v,$input);
            if($k2 !== false){
                return [$k1,$k2];
            }
        }
        return "未找到对应的元素";
    }
}
