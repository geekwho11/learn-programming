<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-03 01:38:20
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-05 01:22:36
 */
class twoSumTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums'   => [2, 7, 11, 15],
                    'target' => 9,
                ],
                'output' => [0,1],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new twoSum())->run($input['nums'], $input['target']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
            $return = (new twoSum())->run1($input['nums'], $input['target']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
        }
    }
}
