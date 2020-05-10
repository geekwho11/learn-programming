<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-11 15:37:42
 */
class rotateImageTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums' => [
                      [1,2,3],
                      [4,5,6],
                      [7,8,9]
                    ],
                ],
                'output' => [
                  [7,4,1],
                  [8,5,2],
                  [9,6,3]
                ],
            ],
            'case2' => [
                'input' => [
                    'nums' => [
                      [ 5, 1, 9,11],
                      [ 2, 4, 8,10],
                      [13, 3, 6, 7],
                      [15,14,12,16]
                    ],
                ],
                'output' => [
                  [15,13, 2, 5],
                  [14, 3, 4, 1],
                  [12, 6, 8, 9],
                  [16, 7,10,11]
                ],
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new rotateImage())->run($input['nums']);
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
