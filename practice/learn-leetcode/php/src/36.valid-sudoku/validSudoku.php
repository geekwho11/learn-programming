<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-12 20:34:37
 */
class validSudoku
{
    /**
     * @see https://www.jianshu.com/p/e83a7b11f5e2
     */
    public function run($input)
    {
        $sudoku = [];
        $debug  = false;
        foreach ($input as $i => $value) {
            foreach ($value as $j => $v) {
                if($v == '.'){
                    continue;
                }
                //判断每一行是否有多个数字
                //以行+当前值 为键值
                $row = implode('_',[$i,$v,'case1']);
                $sudoku[$row]++;
                if(isset($sudoku[$row]) && $sudoku[$row] == 2){
                    return false;
                }
                //判断每一列是否有多个数字
                //以列+当前值 为键值
                $cloum = implode('_',[$j,$v,'case2']);
                $sudoku[$cloum]++;
                if(isset($sudoku[$cloum]) && $sudoku[$cloum] == 2){
                    return false;
                }
            }
            //3x3小宫格
            //小内宫+当前值 为键值
            $row = 3 * intval($i / 3);
            $col = 3 * ($i % 3);

            for ($drow = 0; $drow < 3; $drow++) {
                for ($dcol = 0; $dcol < 3; $dcol++) {
                    $v = $input[$row + $drow][$col + $dcol];
                    if($v == '.'){
                        continue;
                    }
                    $key = implode('_',[$row,$col,$v,'case3']);
                    if($debug){
                        echo sprintf(
                            PHP_EOL . "i j row col drow dcol key v %s %s %s %s %s %s %s %s" . PHP_EOL,
                            $i,
                            $j,
                            $row,
                            $col,
                            $drow,
                            $dcol,
                            $key,
                            $v
                        );
                    }
                    $sudoku[$key]++;
                    if(isset($sudoku[$key]) && $sudoku[$key] == 2){
                        return false;
                    }
                }
            }
        }
        return true;
    }

}
