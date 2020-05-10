<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-11 10:45:59
 */
class plusOneTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums' => [1,2,3],
                ],
                'output' => [1,2,4],
            ],
            'case2' => [
                'input' => [
                    'nums' => [4,3,2,1],
                ],
                'output' => [4,3,2,2],
            ],
            'case3' => [
                'input' => [
                    'nums' => [1,6,9],
                ],
                'output' => [1,7,0],
            ],
            'case3.1' => [
                'input' => [
                    'nums' => [1,9,9],
                ],
                'output' => [2,0,0],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new plusOne())->run($input['nums']);
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
