<?php 

// 20 minutes to solve
// Runtime - 7ms - Beats 96.61%of users with PHP
// Memory - 19.64mb - Beats 68.47%of users with PHP

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {

        for ($i=0;$i<count($nums);$i++) {
            if ($target < $nums[$i]) {
                return $i;
            }
            if ($nums[$i]==$target) {
                return $i;
            }
        }
        return count($nums);
    }
}

$solution = new Solution;
$nums = [1,3,5,6];
$target = 5;
$add = $solution->searchInsert($nums, $target);
print_r($add);