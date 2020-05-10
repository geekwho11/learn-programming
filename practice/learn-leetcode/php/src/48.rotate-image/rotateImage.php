<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-12 10:43:23
 * @see https://github.com/aQuaYi/LeetCode-in-Go/blob/master/Algorithms/0048.rotate-image/rotate-image.go
 */
class rotateImage
{
    /**
     * @see http://php.net/manual/zh/language.references.whatdo.php
     *
     * 代码解析：
        1. 第一次循环
        $n = 3
        $i = 0; $i < 1.5(3/2);$i++
        $j=0;$j< 2($n-$i-1=3-0-1=2);$j++
            $r1 = 1 ($input[0][0])($i,$j)
            $r2 = 7 ($input[2][0])($n - $j - 1=3-0-1=2,$i)
            $r3 = 9 ($input[2][2])($n - $i - 1=3-0-1=2,$n - $j - 1=3-0-1=2)
            $r4 = 3 ($input[0][2])($j,$n - $i - 1=3-0-1=2)
            $tmp = $r1

            $r1 = $r2
            $input[0][0] = $input[2][0]

            $r2 = $r3
            $input[2][0] = $input[2][2]

            $r3 = $r4
            $input[2][2] = $input[0][2]

            $r4 = $tmp
        2. 第二次循环
            $i = 0,$j=1
            $r1 = 2 ($input[0][1])($i,$j)
            $r2 = 4 ($input[1][0])($n - $j - 1=3-1-1=2,$i)
            $r3 = 8 ($input[2][1])($n - $i - 1=3-0-1=2,$n - $j - 1=3-1-1=1)
            $r4 = 6 ($input[1][2])($j,$n - $i - 1=3-0-1=2)
            $tmp = $r1

            $r1 = $r2
            $input[0][1] = $input[1][0]

            $r2 = $r3
            $input[1][0] = $input[2][1]

            $r3 = $r4
            $input[2][1] = $input[1][2]

            $r4 = $tmp
        3. $j = 2 退出内循环，达到外层循环$i++,
        $i=1
        $j=1,$j<1($n-$i-1=3-1-1=1),循环结束
        4. 循环结束条件为什么是$i<$n/2  $j < ($n-$i-1)
        3个元素的数组，需要旋转次数为2次-> 内层循环从0到1
        4个元素的数组，需要旋转4次->内层循环从0,3
    */
    public function run($input)
    {
        $n     = count($input);
        $debug = false;
        for ($i = 0; $i < $n / 2; $i++) {
            for ($j = $i; $j < $n - $i - 1; $j++) {
                // 引用传递改变原变量的值
                $r1  = & $input[$i][$j];
                $r2  = & $input[$n - $j - 1][$i];
                $r3  = & $input[$n - $i - 1][$n - $j - 1];
                $r4  = & $input[$j][$n - $i - 1];
                $tmp = $input[$i][$j];

                $r1 = $r2;
                $r2 = $r3;
                $r3 = $r4;
                $r4 = $tmp;
                if($debug){
                    echo sprintf("i j r1 r2 r3 r4 %s %s %s %s %s %s" . PHP_EOL,
                        $i,
                        $j,
                        $i . ',' . $j . '->r1:'. $r1,
                        ($n - $j - 1) . ',' . $i . '->r2:' . $r2,
                        ($n - $i - 1) . ',' . ($n - $j - 1) . '->r3:'. $r3,
                        $j . ',' . ($n - $i - 1) .'->r4:'.$r4
                    );
                }
            }
        }
        return $input;
    }

}
