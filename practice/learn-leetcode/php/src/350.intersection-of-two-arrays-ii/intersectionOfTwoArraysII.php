<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-10 19:37:14
 */
class intersectionOfTwoArraysII
{
    public function run($input1, $input2)
    {
        $data = [];
        foreach ($input1 as $key => $value) {
            if(in_array($value, $input2)){
                $data[] = $value;
            }
        }
        return $data;
    }

}
