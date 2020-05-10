<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-09 23:22:23
 */
class containsDuplicate
{
    public function run($input)
    {
        if(!is_array($input) || !$input)
        {
            return "请输入数组";
        }
        $data = [];
        for ($i=0; $i < (count($input) - $k); $i++) {
            if(array_key_exists($input[$i], $data)){
                return true;
            }
            $data[$input[$i]] = $input[$i];
        }
        return false;
    }

}
