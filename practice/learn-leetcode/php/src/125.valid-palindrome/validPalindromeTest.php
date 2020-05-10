<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 22:00:53
 */
class validPalindromeTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case0' => [
                'input' => [
                    'str' => '!',
                ],
                'output' => "请输入字母或者数字",
            ],
            'case1' => [
                'input' => [
                    'str' => 'A man, a plan, a canal: Panama',
                ],
                'output' => true,
            ],
            'case2' => [
                'input' => [
                    'str' => 'race a car',
                ],
                'output' => false,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new validPalindrome())->run($input['str']);
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
