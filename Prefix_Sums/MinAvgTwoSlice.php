<?php
// Arrays to test
$A = [10,10,-1,2,4,-1,2,-1]; // res = 5
//$A = [-3,-5,-8,-4,-10]; // res = 2
//$A = [4,2,2,5,1,5,8]; // res = 1
//$A = [10000,-10000]; // res = 0

function solution($A) {
    $A_size      = count($A); // set size of $A
    $min_value_2 = ($A[0] + $A[1])/2; // Min AVG to 2 integers
    $min_index_2 = 0; // The index for que smaller AVG 2 integers
    $min_value_3 = $min_value_2; // Min AVG to 3 integers
    $min_index_3 = 0; // The index for que smaller AVG 2 integers
    // If the size of the array is two so returns 0
    if ($A_size == 2) {
        return 0;
    }

    // Prefix sum of $A
    for ($i=1; $i < count($A); $i++) { 
        $A[$i] += $A[$i-1];
    }
    /**
     * Calculate the AVG for every two integers of the array
     */
    for ($i=2; $i < $A_size; $i++) { 

        $slc_2 = ($A[$i] - $A[$i-2])/2; // AVG
        // Stores the smallest value AVG and the index
        if ($slc_2 < $min_value_2) {
            $min_value_2 = $slc_2;
            $min_index_2 = $i-1;
        }
    }
    /**
     * Calculate the AVG for every Tree integers of the array
     */
    for ($i=3; $i < $A_size; $i++) { 

        $slc_3 = ($A[$i] - $A[$i-3])/3; // AVG
        // Stores the smallest value AVG and the index
        if ($slc_3 < $min_value_3) {
            $min_value_3 = $slc_3;
            $min_index_3 = $i-2;
        }
    }
    // Here verifys who is the smallest between the values
    if ($min_value_2 < $min_value_3) {
        return $min_index_2;
    }
    return $min_index_3;
}

var_dump(solution($A));