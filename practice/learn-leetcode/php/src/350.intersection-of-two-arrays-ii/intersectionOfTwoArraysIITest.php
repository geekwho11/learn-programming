<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-10 19:38:25
 */
class intersectionOfTwoArraysIITest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums1' => [1,2,2,1],
                    'nums2' => [2,2],
                ],
                'output' => [2,2],
            ],
            'case2' => [
                'input' => [
                    'nums1' => [4,9,5],
                    'nums2' => [9,4,9,8,4],
                ],
                'output' => [4,9],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new intersectionOfTwoArraysII())->run($input['nums1'], $input['nums2']);
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output %s",
                    var_export($return, true),
                    var_export($output, true)
                )
            );

        }
    }
}
