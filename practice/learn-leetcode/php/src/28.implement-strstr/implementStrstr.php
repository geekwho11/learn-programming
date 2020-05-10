<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-19 13:01:25
 */
class implementStrstr
{
    public function run($input, $needle)
    {
        if($needle === '') return 0;
        $count1 = mb_strlen($input);
        $count2 = mb_strlen($needle);
        $flag   = false;
        for ($i = 0; $i < $count1; $i++) {
            $str = mb_substr($input, $i, $count2);
            if($str === $needle){
                return $i;
            }
        }
        return -1;
    }

}
