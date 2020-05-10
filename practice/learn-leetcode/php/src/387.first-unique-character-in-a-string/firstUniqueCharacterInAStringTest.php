<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 17:28:35
 */
class firstUniqueCharacterInAStringTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str' => 'leetcode',
                ],
                'output' => 0,
            ],
            'case2' => [
                'input' => [
                    'str' => 'loveleetcode',
                ],
                'output' => 2,
            ],
            'case3' => [
                'input' => [
                    'str' => 'leetcodeltcod',
                ],
                'output' => -1,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new firstUniqueCharacterInAString())->run($input['str']);
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
