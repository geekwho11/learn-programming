<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   matt
 * @Last Modified time: 2018-12-19 15:03:28
 */
class longestCommonPrefixTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str' => ["flower","flow","flight"],
                ],
                'output' => 'fl',
            ],
            'case1.1' => [
                'input' => [
                    'str' => ["dog","racecar","car"],
                ],
                'output' => '',
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new longestCommonPrefix())->run($input['str']);
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
