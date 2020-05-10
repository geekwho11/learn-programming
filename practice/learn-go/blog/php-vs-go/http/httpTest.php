<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-24 17:29:15
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-24 17:39:35
 */
class httpTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://0.0.0.0:2018");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);//设置为POST方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, []);  //POST数据
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $return = curl_exec($ch);
        curl_close($ch);

        $tests = [
            'case1',
            'case2',
            'case3',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                strpos($return , $test) !== false,
                "$test test failed."
            );
        }
    }
}
