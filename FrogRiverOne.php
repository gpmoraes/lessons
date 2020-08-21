<?php

$A = [1,3,1,4,2,3,5,4];
$X = 5;

function solution($X, $A) {
    $size  = count($A);
    $res   = []; 
    $count = $X*($X+1)/2;

    for ($i=0; $i < $size; $i++) { 
        if (!in_array($A[$i], $res)) {
            array_push($res, $A[$i]);
            $count -= $A[$i];
        }
        if ($count == 0) {
            return $i-1;
        }
        
    }
    return -1;
}

var_dump(solution($X, $A));