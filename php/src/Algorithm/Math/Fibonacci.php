<?php

/**
 * @Author: GeekWho
 * @Date:   2018-10-27 18:52:16
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-10-28 15:01:23
 */
namespace Algorithm\Math;

class Fibonacci extends Base
{
    public static function run()
    {
        $times = 1*1000;

        $echo = false;
        $round = 11;
        $f=self::fibonacci();
        $t1=microtime(true);
        for($i = 1;$i<$times;$i++){
            if($echo){
                var_dump($f());
                continue;
            }
            $max1 = $f();
        }
        $t2=microtime(true) - $t1;
        $t2 =round($t2,$round);
        echo "max $max1 closure   cost time " . $t2 .PHP_EOL;

        /*$t1=microtime(true);
        for($i = 1;$i<$times;$i++){
           var_dump(self::fibonacci_1($i));
        }
        $t2=microtime(true) - $t1;
        $t2 =round($t2,7);
        echo 'recursion cost time ' . $t2 .PHP_EOL;
        //var_dump(fibonacci_1(7));
        //第7个数是13*/

        $t1=microtime(true);
        for($i = 1;$i<$times;$i++){
            if($echo){
                var_dump(self::fibonacci_2($i,0,1));
                continue;
            }
            $max2 = self::fibonacci_2($i,0,1);
        }
        $t2=microtime(true) - $t1;
        $t2 =round($t2,$round);
        echo "max $max2 recursion cost time " . $t2 .PHP_EOL;

        $t1=microtime(true);
        if($echo){
            var_dump(self::fibonacci_3($times));
        }else{
            $max3 = self::fibonacci_3($times);
        }
        $t2=microtime(true) - $t1;
        $t2 =round($t2,$round);
        echo "max $max3 recursion cost time " . $t2 .PHP_EOL;
        if(!($max1 == $max2 && $max2 == $max3)){
            echo "calc error.";
        }
    }

    // 闭包实现
    public static function fibonacci() {
        list($a,$b) = [0,1];
        return function() use(&$a,&$b) {
            list($a,$b)=[$b,$a+$b];
            return $a;
        };
    }

    // 递归实现
    public static function fibonacci_1($i){
        if($i < 1) return 0;
        if($i == 1) return 1;
        if($i > 1){
            return self::fibonacci_1($i-2) + self::fibonacci_1($i-1);
        }
    }

    /**
     * 递归实现 尾部递归优化
     *
     * @param   $i
     * @param   $a
     * @param   $b
     * @return
     * @see https://www.jianshu.com/p/6bdc8e3637f2
     */
    public static function fibonacci_2($i, $a, $b){
        if($i == 0 ) return $a;
        return self::fibonacci_2($i-1, $b, $a+$b);
    }

    /**
     * 迭代
     */
    public static function fibonacci_3($n){
        $a = $b = 1;
        while( $n > 2 ){
            $n -= 1;
            list($a,$b)=[$b,$a+$b];
        }
        return $a;
    }
}
