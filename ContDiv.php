<?php

$A = 6;
$B = 11;
$K = 2;

function solution($A, $B, $K){
    $check_A = $A % $K;
    $sum     = 0;
    // A will defines if the result is plus one
    if ($check_A == 0) {
        $sum = 1;
    }
    
    $A = (int) floor($A / $K);
    $B = (int) floor($B / $K);
    
    $res = ($B - $A) + $sum;
 
    return (int) floor($res);
}

var_dump(solution($A, $B, $K));