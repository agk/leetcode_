<?php
class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        $s = array();
        for ($i = 0; $i < count($nums); $i++) {
            $diff = $target - $nums[$i];
            if (array_key_exists($diff, $s)) {
                return array($s[$diff], $i);
            }
            else {
                $s[$nums[$i]] = $i;
            }
            
        }
    }
}