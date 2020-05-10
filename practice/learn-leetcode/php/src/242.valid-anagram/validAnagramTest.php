<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 20:41:20
 */
class validAnagramTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str1' => 'anagram',
                    'str2' => 'nagaram',
                ],
                'output' => true,
            ],
            'case2' => [
                'input' => [
                    'str1' => 'rat',
                    'str2' => 'car',
                ],
                'output' => false,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new validAnagram())->run($input['str1'], $input['str2']);
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
