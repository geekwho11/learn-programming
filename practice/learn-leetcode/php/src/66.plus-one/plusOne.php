<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-11 11:06:35
 */
class plusOne
{
    public function run($input)
    {
        if(!is_array($input) || !$input)
        {
            return "请输入数组";
        }
        //是否有进位
        $plus = false;
        //从数组末位开始循环
        for ($i=count($input) - 1; $i >= 0; $i--) {
            $j=$input[$i];
            // 没有进位产生
            if(!$plus && $j < 9){
                $input[$i] = $j + 1;
                break;
            }
            // 有进位
            if($plus && $j < 9){
                $input[$i] = $j + 1;
                $plus      =false;
                break;
            }
            //进位的算法，将当前值为0，并标记进位
            $input[$i] = 0;
            $plus      = true;
        }
        return $input;
    }

}
