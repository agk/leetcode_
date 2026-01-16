<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $arr = array(
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000,
        );
        $res = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($i > 0 && $arr[$s[$i]] > $arr[$s[$i-1]]) {
                $res = $res + $arr[$s[$i]] - 2 * $arr[$s[$i-1]];
            }
            else {
                $res = $res + $arr[$s[$i]];
            }
            
        }
        
        return $res;
    }
}