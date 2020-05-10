<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-05 16:16:56
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-06 10:13:24
 *
 * @see http://php.net/manual/en/arrayobject.getarraycopy.php
 * @see http://php.net/manual/en/language.references.whatdo.php
 */
class removeDuplicatesFromSortedArray
{
    public function run($input)
    {
        $debug = false;
        if(!is_array($input))
        {
            return "请输入数组";
        }
        $data = (new ArrayObject($input))->getArrayCopy();

        for ($i=0,$j=1; $j < count($input); $j++) {
            if ($input[$i] != $input[$j]){
                $i++;
                continue;
            }
            if ($input[$i] == $input[$j]){
                unset($data[$i]);
                $i++;
            }
            if($debug){
                echo sprintf("i %s j %s vi %s vj %s" . PHP_EOL,$i,$j,$input[$i],$input[$j]);
            }
        }
        return count($data);
    }
}
