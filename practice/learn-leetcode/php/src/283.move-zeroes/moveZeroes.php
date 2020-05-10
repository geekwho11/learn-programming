<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-11 12:16:46
 */
class moveZeroes
{
    /**
     *
     * 1. 0,1,0,3,12
     * 2. 1 0 0 3 12
     * 3. 1 3 0 0 12
     * 4. 1 3 12 0 0
     */
    public function run($input)
    {
        if(!is_array($input) || !$input)
        {
            return "请输入数组";
        }
        //记录零的个数，那么每次移动多少位
        $zero  = 0;
        $debug = false;
        for ($i=0,$j=1; $i < count($input) ; $i++,$j++) {
            if($input[$i] != 0){
                continue;
            }
            //如果找到第一个零，标记为1
            if(!$zero) $zero++;
            if($debug){
                echo sprintf(
                    'zero i j iv jv %s %s %s %s %s' . PHP_EOL,
                    $zero,
                    $i,
                    $j,
                    $input[$i],
                    $input[$j]
                );
            }
            // 找到0，比0大的话，就交换位置
            if($input[$i] == 0 && $input[$j] > $input[$i]){
                $input[$j - $zero] = $input[$j];
                $input[$j]         = 0;
                continue;
            }
            // 找到0，比0小的话，零的个数加1
            if($input[$i] == 0 && $input[$j] <= $input[$i]){
                $zero++;
                continue;
            }
        }
        return $input;
    }

    /**
     * 参考解题答案
     * 1. 非零元素前移
     * 2. 零元素最末尾
     * @see https://www.jianshu.com/p/cd0c7ba56567
     */
    public function run1($input)
    {
        if(!is_array($input) || !$input)
        {
            return "请输入数组";
        }
        //记录非o元素开始位置
        $k = 0;
        for($i=0;$i < count($input);$i++){
            if($input[$i] != 0) {
                $input[$k++] = $input[$i];
            }
        }
        while($k < count($input)) {
            $input[$k] = 0;
            $k++;
        }
        return $input;
    }

}
