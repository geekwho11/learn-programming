<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-19 12:30:51
 */
class stringToIntegerAtoi
{
    public function run($input)
    {
        $int   = '';
        $count = mb_strlen($input);
        $flag  = false;
        for ($i = 0; $i < $count; $i++) {
            $str = mb_substr($input, $i, 1);
            if(!is_numeric(intval($str)) && $str != ' ' && $str != '+' && $str != '-'){
                return 0;
            }
            if($str == '-'){
                $flag = true;
                continue;
            }
            if($str == ' '){
                continue;
            }
            $int .= $str;
        }
        $int = intval($int) * ($flag?-1:1);
        //检查范围
        if($int < (-pow(2,31)))
        {
            return -pow(2,31);
        }
        if($int > (pow(2,31) - 1))
        {
            return pow(2,31) - 1;
        }
        return $int;
    }

}
