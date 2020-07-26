<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 23:52:55
 */
namespace Algorithm\Search;

class BinaryTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums'   => [18,19,37,57,63,68,71,81,84,99],
                    'findme' => '63'
                ],
                'output' => 4,
            ],
            'case2' => [
                'input' => [
                    'nums'   => [18,19,37,57,63,68,71,81,84,99],
                    'findme' => '1'
                ],
                'output' => false,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new \Algorithm\Search\Binary())->run($input['nums'], $input['findme']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed. return $return output $output"
            );
        }

        $debug = false;
        if ($debug) {
            (new \Algorithm\Search\Binary)->test();
        }
    }
}
