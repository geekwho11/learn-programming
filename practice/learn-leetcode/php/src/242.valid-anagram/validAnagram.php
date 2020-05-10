<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 20:43:04
 */
class validAnagram
{
    public function run($input1, $input2)
    {
        if(!is_string($input1) || !is_string($input2)){
            return "请输入字符串";
        }

        $str   = [];
        $count = mb_strlen($input1);
        for ($i = 0; $i < $count; $i++) {
            $k= mb_substr($input1, $i, 1);
            $str[$k]++;
        }
        $count = mb_strlen($input2);
        for ($i = 0; $i < $count; $i++) {
            $k= mb_substr($input2, $i, 1);
            $str[$k]--;
        }

        foreach ($str as $v) {
            if($v != 0 ) return false;
        }

        return true;
    }

}
