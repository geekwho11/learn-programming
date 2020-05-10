<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-09 16:35:49
 */
class bestTimeToBuyAndSellStockIITest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums' => [7,1,5,3,6,4],
                ],
                'output' => 7,
            ],
            'case2' => [
                'input' => [
                    'nums' => [1,2,3,4,5],
                ],
                'output' => 4,
            ],
            'case3' => [
                'input' => [
                    'nums' => [7,6,4,3,1],
                ],
                'output' => 0,
            ],
            'case3.1' => [
                'input' => [
                    'nums' => [1, 7, 2, 3, 6, 7, 6, 7],
                ],
                'output' => 12,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new bestTimeToBuyAndSellStockII())->run($input['nums']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed. return $return output $output"
            );
        }
    }
}
