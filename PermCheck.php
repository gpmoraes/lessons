<?php

$A = [4, 1, 3, 2];

function solution($A) {
    $arr = [];
    // Organize and sort the values and save on the array
    foreach($A as $key => $value){
        $val = $value-1;
        if(!isset($arr[$val])){
            $arr[$val] = 1;
        }
    }
    // Set the variables
    $sum  = array_sum($A);
    $size = count($arr);
    // Calculate the values of $res
    $res = $size*($size + 1)/2;

    if($res != $sum){
        return 0;
    }
    
    return 1;
}

var_dump(solution($A));