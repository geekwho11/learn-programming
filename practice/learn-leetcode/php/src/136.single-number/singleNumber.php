<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-10 01:03:21
 */
class singleNumber
{
    public function run($input)
    {
        if(!is_array($input) || !$input)
        {
            return "请输入数组";
        }
        $data   = [];
        for ($i=0; $i < count($input); $i++) {
            if(array_key_exists($input[$i], $data)){
                $data[$input[$i]] += 1;
                if($signle == $input[$i]){
                    $signle = array_search(1,$data);
                }
                continue;
            }
            $data[$input[$i]]   = 1;
            $signle             = $input[$i];
        }
        if($signle) return $signle;
        return false;
    }

}
