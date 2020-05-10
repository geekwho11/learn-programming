<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   matt
 * @Last Modified time: 2018-12-19 15:19:37
 */
class longestCommonPrefix
{
    public function run($input)
    {
        $count1 = count($input);
        $str    = [];
        $long   = '';
        $count2 = 0;
        // 找到最短的字符串
        for ($i=0; $i < $count1 - 1; $i++) {
            $count2 = min(mb_strlen($input[$i]),mb_strlen($input[$i + 1]));
        }

        // 从最短的字符串开始
        for ($i=0; $i < $count2; $i++) {
            for ($j=0; $j < $count1; $j++) {
               $k = mb_substr($input[$j], $i, 1);
               $str[$i.$k]++;
               if($str[$i.$k] == 3){
                    $long .= $k;
               }
            }
        }
        return $long;
    }

}
