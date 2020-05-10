<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-09 20:27:27
 */
class rotateArray
{
    public function run($input,$k)
    {
        if(!is_array($input))
        {
            return "请输入数组";
        }
        if(!$k){
            return "请输入正确的个数";
        }
        if($k > count($input)){
            return "旋转个数不能大于数组元素个数";
        }
        $data = [];
        for ($i=count($input) - 1,$j=0; $j < $k ; $i--) {
            //将元素压入数组开头
            array_unshift($data, $input[$i]);
            $j++;
        }
        for ($i=0,$j=0; $i < (count($input) - $k); $i++) {
            $data[]=$input[$i];
        }
        return $data;
    }

    public function run1($input,$k)
    {
        if(!is_array($input))
        {
            return "请输入数组";
        }
        if(!$k){
            return "请输入正确的个数";
        }
        if($k > count($input)){
            return "旋转个数不能大于数组元素个数";
        }
        $offset = $length = 0;
        $offset = count($input) - $k;
        $length = $k;
        //切割后面的数组
        $data   = array_slice($input, $offset, $length);
        $offset = 0;
        $length = count($input) - $k;
        //切割前面的数组
        $data   = array_merge($data, array_slice($input, $offset, $length));
        return $data;
    }

    public function run2($input,$k)
    {
        if(!is_array($input))
        {
            return "请输入数组";
        }
        if(!$k){
            return "请输入正确的个数";
        }
        if($k > count($input)){
            return "旋转个数不能大于数组元素个数";
        }
        $data  = [];
        $count = count($input);
        foreach ($input as $key => $value) {
            $data[($key + $k) % $count]=$value;
        }
        return $data;
    }
}
