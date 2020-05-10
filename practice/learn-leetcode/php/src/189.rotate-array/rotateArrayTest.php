<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-09 20:28:00
 */
class rotateArrayTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums' => [1,2,3,4,5,6,7],
                    'k'    => 3,
                ],
                'output' => [5,6,7,1,2,3,4],
            ],
            'case2' => [
                'input' => [
                    'nums' => [-1,-100,3,99],
                    'k'    => 2,
                ],
                'output' => [3,99,-1,-100],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new rotateArray())->run($input['nums'],$input['k']);
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output %s",
                    var_export($return, true),
                    var_export($output, true)
                )
            );

            $return = (new rotateArray())->run1($input['nums'],$input['k']);
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output %s",
                    var_export($return, true),
                    var_export($output, true)
                )
            );

            $return = (new rotateArray())->run2($input['nums'],$input['k']);
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
