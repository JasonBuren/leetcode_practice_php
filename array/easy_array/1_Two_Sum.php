<?php 

// 10 minutes to solve
// Runtime - 1769ms - Beats 13.51%of users with PHP
// Memory - 19.79mb - Beats 79.49%of users with PHP

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        for ($i=0;$i<count($nums);$i++) {
            for ($m=0;$m<count($nums);$m++) {
                if ($i == $m) {
                    continue;
                }
                if (($nums[$i] + $nums[$m]) == $target) {
                    return [$i, $m];
                }
            }
        }
    }
}

$solution = new Solution;
$nums = [2,7,11,15];
$target = 9;
$add = $solution->twoSum($nums, $target);
print_r($add);