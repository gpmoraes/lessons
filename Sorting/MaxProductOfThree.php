<?php

// Arrays used in tests
$A = [-3, 1, 2, -2, 5, 6]; // 60
// $A = [-5, 5, -5, 4];       // 125
// $A = [-4, -6, 3, 4, 5];    // 120

function solution($A) {
    // I need to sort the array to applay the test
    sort($A);
    // The bigger result can be the multiplication of the two smallest numbers
    // combined with the bigger, position n-1
    $res_1 = $A[0]*$A[1]*$A[count($A)-1];
    // Or could be the multiplication of the three last numbers of the array
    $res_2 = $A[count($A)-3]*$A[count($A)-2]*$A[count($A)-1];
    // Here i compare the results and return the bigger
    if ($res_1 > $res_2) {
        return $res_1;
    }
    return $res_2;
}

var_dump(solution($A));