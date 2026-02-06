<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if (strlen($s) <= 1) {
            return false;
        }
    
        for ($j = 0; $j <= 10000; $j++) {
            $substr = ["{}", "[]", "()"];
            for ($i = 0; $i < count($substr); $i++) {
                if (str_contains($s, $substr[$i])) {
                    $s = str_replace($substr[$i], "", $s);
                }
            }
            
        }
        
        if (strlen($s) > 0) {
            return false;
        }
        return true;
    }
}