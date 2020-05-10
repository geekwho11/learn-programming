<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 16:46:25
 */
class reverseInteger
{
    // 最简单的办法，每次求得十或者百位的数，根据计算法则累积
    public function run($input)
    {
        //检查输入范围
        if($input < (-pow(2,31)) || $input > (pow(2,31) - 1))
        {
            return 0;
        }
        $int = 0 ;
        /**
         * 以123为例：
         * 1. int = 0 * 10 + 123 % 10 = 3
         * input = intval(123/10) = 12
         * 2. int = 3*10 + 12 % 10= 32
         * input = intval(12/10) = 1
         * 3. int = 32 * 10 + 1 %10 = 321
         * input = 0
         */
        while($input != 0){
            $int   = $int * 10 + $input % 10;
            $input = intval($input / 10);
        }
        if($int < (-pow(2,31)) || $int > (pow(2,31) - 1))
        {
            $int = 0;
        }
        return $int;
    }

}
