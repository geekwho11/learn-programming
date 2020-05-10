<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:31
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-09 23:18:08
 */
class containsDuplicateTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums' => [1,2,3,1],
                ],
                'output' => true,
            ],
            'case2' => [
                'input' => [
                    'nums' => [1,2,3,4],
                ],
                'output' => false,
            ],
            'case3' => [
                'input' => [
                    'nums' => [1,1,1,3,3,4,3,2,4,2],
                ],
                'output' => true,
            ],
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new containsDuplicate())->run($input['nums']);
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
