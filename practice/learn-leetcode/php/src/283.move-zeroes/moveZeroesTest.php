<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-11 12:11:06
 */
class moveZeroesTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums' => [0,1,0,3,12],
                ],
                'output' => [1,3,12,0,0],
            ],
            'case2' => [
                'input' => [
                    'nums' => [1,2,0,42,0],
                ],
                'output' => [1,2,42,0,0],
            ],
            'case2.1' => [
                'input' => [
                    'nums' => [1,0,2,0,42,0],
                ],
                'output' => [1,2,42,0,0,0],
            ],
            'case3' => [
                'input' => [
                    'nums' => [0,0,0,0,42],
                ],
                'output' => [42,0,0,0,0],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new moveZeroes())->run($input['nums']);
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output %s",
                    var_export($return, true),
                    var_export($output, true)
                )
            );

            $return = (new moveZeroes())->run1($input['nums']);
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
