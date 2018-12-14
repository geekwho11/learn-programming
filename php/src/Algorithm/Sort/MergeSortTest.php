<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 21:47:55
 */
namespace Algorithm\Sort;

class MergeSortTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums1' => [14,23,24,42,43,49,89,93,95,96],
                    'nums2' => [1,10,20,72,73,74,81,87,98,99]
                ],
                'output' => [1,10,14,20,23,24,42,43,49,72,73,74,81,87,89,93,95,96,98,99],
            ],
            'case2' => [
                'input' => [
                    'nums1'   => [6,8,25,26,40,46,51,93,93,93],
                    'nums2'   => [9,18,26,31,45,52,54,78,80,88],
                ],
                'output' => [6,8,9,18,25,26,26,31,40,45,46,51,52,54,78,80,88,93,93,93],
            ]
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new \Algorithm\Sort\MergeSort())->run($input['nums1'], $input['nums2']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
        }

        $debug = false;
        if($debug){
            (new \Algorithm\Sort\MergeSort)->sort();
            /*
            //1000
            (new \Algorithm\Sort\MergeSort)->sort(1000);
            //10000
            (new \Algorithm\Sort\MergeSort)->sort(10000);
            //10,0000
            (new \Algorithm\Sort\MergeSort)->sort(100000);
            */
        }
    }
}
