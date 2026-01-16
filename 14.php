<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $str = $strs[0];
        $finl = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $currentChar = $str[$i];
            for ($j = 1; $j < count($strs); $j++) {
                if ($strs[$j][$i] != $currentChar) {
                    return $finl;
                }    
            }
            $finl .= $currentChar;
        }
        return $finl;
    }
}