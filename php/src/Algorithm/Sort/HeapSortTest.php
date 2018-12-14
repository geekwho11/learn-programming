<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 22:02:08
 */
namespace Algorithm\Sort;

class HeapSortTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums'   => [25,47,94,97,42,65,94,70,26,52],
                ],
                'output' => [97,94,94,70,65,52,47,42,26,25],

            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new \Algorithm\Sort\HeapSort())->run($input['nums']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
        }

        $tests = [
            'case2' => [
                'input' => [
                    'nums'   => [76,37,55,78,36,64,9,64,41,31],
                ],
                'output' => [9,31,36,37,41,55,64,64,76,78],
            ]
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new \Algorithm\Sort\HeapSort())->run1($input['nums']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
        }

        $debug = false;
        if($debug){
            (new \Algorithm\Sort\HeapSort)->sort();
            /*
            //1000
            (new \Algorithm\Sort\HeapSort)->sort(1000);
            //10000
            (new \Algorithm\Sort\HeapSort)->sort(10000);
            //10,0000
            (new \Algorithm\Sort\HeapSort)->sort(100000);
            */
        }
    }
}
