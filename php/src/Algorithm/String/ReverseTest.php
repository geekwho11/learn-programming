<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 23:35:29
 */
namespace Algorithm\String;

class ReverseTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str'   => "Hello World,你好，中国",
                ],
                'output' => "国中，好你,dlroW olleH",
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new \Algorithm\String\Reverse())->run($input['str']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed. return $return output $output"
            );
            $return = (new \Algorithm\String\Reverse())->run1($input['str']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed. return $return output $output"
            );
        }

        $tests = [
            'case1' => [
                'input' => [
                    'str'   => "Hello world!",
                ],
                'output' => "!dlrow olleH",
            ]
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new \Algorithm\String\Reverse())->run2($input['str']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed. return $return output $output"
            );
        }

        $debug = false;
        if ($debug) {
            (new \Algorithm\String\Reverse)->test();
        }
    }
}
