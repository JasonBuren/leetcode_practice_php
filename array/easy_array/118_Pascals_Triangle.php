<?php

// Not my solution
// Runtime - 6ms - Beats 71.00% of users with PHP
// Memory - 19.23mb - Beats 35.00% of users with PHP

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {

    $array = [];

    for ($n=0; $n<$numRows; $n++) {
        
        for ($m=0;$m<=$n; $m++) {
            $array[$n][$m] = ($m==0 || $m==$n) ? 1 : ($array[$n-1][$m-1] + $array[$n-1][$m]);
        }
    }
    return $array;
    }        
}

$numRows = 3;
$solution = new Solution;
$answer = $solution->generate($numRows);
print_r($answer);