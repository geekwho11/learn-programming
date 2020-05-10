<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 16:08:07
 */
class reverseStringTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str' => 'Hello',
                ],
                'output' => 'olleH',
            ],
            'case2' => [
                'input' => [
                    'str' => 'A man, a plan, a canal: Panama',
                ],
                'output' => 'amanaP :lanac a ,nalp a ,nam A',
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new reverseString())->run($input['str']);
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

        $tests = [
            'case1' => [
                'input' => [
                    'str' => 'Hello',
                ],
                'output' => 'olleH',
            ],
            'case1.1' => [
                'input' => [
                    'str' => 'Hello中国',
                ],
                'output' => '国中olleH',
            ],
            'case2' => [
                'input' => [
                    'str' => 'A man, a plan, a canal: Panama',
                ],
                'output' => 'amanaP :lanac a ,nalp a ,nam A',
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new reverseString())->run1($input['str']);
            $this->assertEquals(
                true,
                $return == $output,
                sprintf(
                    "run test $key failed. return %s output %s",
                    var_export($return, true),
                    var_export($output, true)
                )
            );

            $return = (new reverseString())->run2($input['str']);
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
