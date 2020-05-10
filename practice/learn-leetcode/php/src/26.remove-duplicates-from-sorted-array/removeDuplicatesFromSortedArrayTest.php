<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-05 16:17:07
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-05 16:22:36
 */
class removeDuplicatesFromSortedArrayTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums' => [1,1,2],
                ],
                'output' => 2,
            ],
            'case2' => [
                'input' => [
                    'nums' => [0,0,1,1,1,2,2,3,3,4],
                ],
                'output' => 5,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new removeDuplicatesFromSortedArray())->run($input['nums']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
        }
    }
}
