<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-19 12:30:41
 */
class stringToIntegerAtoiTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str' => '42',
                ],
                'output' => 42,
            ],
            'case1.1' => [
                'input' => [
                    'str' => '   -42',
                ],
                'output' => -42,
            ],
            'case1.2' => [
                'input' => [
                    'str' => '4193 with words',
                ],
                'output' => 4193,
            ],
            'case1.3' => [
                'input' => [
                    'str' => 'words and 987',
                ],
                'output' => 0,
            ],
            'case1.4' => [
                'input' => [
                    'str' => '-91283472332',
                ],
                'output' => -2147483648,
            ],
            'case1.5' => [
                'input' => [
                    'str' => '91283472332',
                ],
                'output' => 2147483647,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new stringToIntegerAtoi())->run($input['str']);
            $this->assertEquals(
                true,
                $return === $output,
                sprintf(
                    "run test $key failed. return %s output %s",
                    var_export($return, true),
                    var_export($output, true)
                )
            );

        }
    }
}
