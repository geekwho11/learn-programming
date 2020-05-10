<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-18 16:02:00
 */
class reverseString
{
    public function run($input)
    {
        if(!is_string($input)){
            return "请输入字符串";
        }

        // str_split 无法处理多字节，如中文的字符
        $array = str_split($input);
        $count = count($array);
        $str   = "";
        for ($i= $count - 1; $i >= 0; $i--) {
            $str .= $array[$i];
        }
        return $str;
    }

    /**
     * 处理中文倒序
     * @see http://php.net/manual/zh/function.strrev.php#122953
     */
    public function run1($input)
    {
        if(!is_string($input)){
            return "请输入字符串";
        }

        $count = mb_strlen($input);
        $str   = "";
        for ($i = $count; $i >= 0; $i--) {
            $str .= mb_substr($input, $i, 1);
        }

        return $str;
    }

    public function run2($input)
    {
        if(!is_string($input)){
            return "请输入字符串";
        }

        $count = mb_strlen($input);
        $str   = "";
        $stack = new \Ds\Stack();;
        for ($i = 0; $i < $count; $i++) {
            $stack->push(mb_substr($input, $i, 1));
        }
        for ($i = $count - 1; $i >= 0; $i--) {
            $str .= $stack->pop();
        }

        return $str;
    }

}
