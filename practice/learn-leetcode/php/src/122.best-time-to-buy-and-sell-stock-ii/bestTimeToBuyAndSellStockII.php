<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-06 17:04:25
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-09 16:27:28
 */
class bestTimeToBuyAndSellStockII
{
    public function run($input)
    {
        $profit = 0;
        if(!is_array($input))
        {
            return $profit;
        }

        for ($i=0; $i < count($input); $i++) {
            if($input[$i + 1] > $input[$i]){
                $profit += $input[$i + 1] - $input[$i];
            }
        }
        return $profit;
    }
}
