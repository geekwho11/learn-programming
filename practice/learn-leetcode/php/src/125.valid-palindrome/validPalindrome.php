<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 22:00:49
 */
class validPalindrome
{
    /**
     * 1. 只需要字母和数字以及空格
     * 2. 两个指针，一个从前往后，一个从后往前
     * 3. 注意奇数和偶数的个数，边界条件
     */
    public function run($input)
    {
        $count = preg_match_all('/[a-z0-9]+/i',$input,$matches);
        if(!$count || !isset($matches[0])){
            return "请输入字母或者数字";
        }
        $str   = strtolower(implode("",$matches[0]));
        $count = mb_strlen($str);
        $debug = false;
        if($debug){
            echo PHP_EOL . $str . PHP_EOL;
        }
        //奇数和偶数的回文字符串的不同
        $stop = $count % 2 == 0?($count / 2):($count + 1) / 2;
        for ($i = 0; $i < $stop; $i++) {
            $str1= mb_substr($str, $i, 1);
            $j   = $i == 0 ?$count - 1:$j;
            $str2= mb_substr($str, $j, 1);
            if($debug){
                echo sprintf("str1 str2 i j %s %s %s %s". PHP_EOL , $str1 , $str2 , $i ,$j);
            }
            if($str1 != $str2) return false;
            $j--;
        }
        return true;
    }

}
