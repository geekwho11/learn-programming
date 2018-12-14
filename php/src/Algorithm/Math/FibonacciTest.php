<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-15 00:34:48
 */
namespace Algorithm\Math;

class FibonacciTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                ],
                'output' => [1,1,2,3,5,8,13,21,34,55],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $f      = (new \Algorithm\Math\Fibonacci())->run();
            $return = [];
            for($i = 1;$i < 11;$i++){
                $return[] = $f();
            }
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output  %s",
                    var_export($return,true),
                    var_export($output,true)
                )
            );

            $return = [];
            for($i = 1;$i < 11;$i++){
                $return[] = (new \Algorithm\Math\Fibonacci())->run2($i,0,1);
            }
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output  %s",
                    var_export($return,true),
                    var_export($output,true)
                )
            );

            $return = [];
            for($i = 2;$i <= 11;$i++){
                $return[] = (new \Algorithm\Math\Fibonacci())->run3($i);
            }
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output  %s",
                    var_export($return,true),
                    var_export($output,true)
                )
            );
        }

        $debug = false;
        if($debug){
            (new \Algorithm\Math\Fibonacci)->test();
        }
    }
}
