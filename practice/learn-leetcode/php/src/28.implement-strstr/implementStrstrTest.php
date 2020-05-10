<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-19 12:54:57
 */
class implementStrstrTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'str'    => 'hello',
                    'findme' => 'll',
                ],
                'output' => 2,
            ],
            'case1.1' => [
                'input' => [
                    'str'    => 'aaaaa',
                    'findme' => 'bba',
                ],
                'output' => -1,
            ],
            'case1.2' => [
                'input' => [
                    'str'    => 'hello',
                    'findme' => '',
                ],
                'output' => 0,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new implementStrstr())->run($input['str'], $input['findme']);
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
