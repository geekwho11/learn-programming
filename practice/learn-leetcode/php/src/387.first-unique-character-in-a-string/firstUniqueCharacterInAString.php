<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 17:51:49
 */
class firstUniqueCharacterInAString
{
    public function run($input)
    {
        if(!is_string($input)){
            return "请输入字符串";
        }
        //暂时不考虑中文字符以及大写字符
        $count  = mb_strlen($input);
        $repeat = [];
        $debug  = false;
        for ($i=0; $i < $count; $i++) {
            $str1 = mb_substr($input, $i, 1);
            for ($j = $i + 1; $j < $count; $j++) {
                $str2 = mb_substr($input, $j, 1);
                if($debug){
                    echo sprintf("str1 str2 i j %s %s %s %s". PHP_EOL , $str1 , $str2 , $i ,$j);
                }
                //将重复的字符存储下来，后续进行对比
                if($str1 == $str2){
                    $repeat[] = $str1;
                    break;
                }
            }
            if(!in_array($str1 , $repeat)) return $i;
        }
        return -1;
    }

}
