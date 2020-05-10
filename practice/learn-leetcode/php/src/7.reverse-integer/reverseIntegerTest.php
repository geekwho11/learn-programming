<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 16:46:10
 */
class reverseIntegerTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str' => 123,
                ],
                'output' => 321,
            ],
            'case1.1' => [
                'input' => [
                    'str' => -123,
                ],
                'output' => -321,
            ],
            'case1.2' => [
                'input' => [
                    'str' => 120,
                ],
                'output' => 21,
            ],
            'case2' => [
                'input' => [
                    'str' => pow(2,32),
                ],
                'output' => 0,
            ],
            'case2.1' => [
                'input' => [
                    'str' => -pow(2,32),
                ],
                'output' => 0,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new reverseInteger())->run($input['str']);
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
