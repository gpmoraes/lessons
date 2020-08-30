<?php

$A = [1,3,1,4,2,3,5,4];
$X = 7;

function solution($X, $A) {
    $check = [];
    $size = count($A);

    // only check if the leaf was placed
    for ($i = 0; $i < $size; $i++){        
        if (!isset($check[$A[$i]])){
            $X--;
            $check[$A[$i]] = true;
        }

        // If $X is zero all the leafes has been placed
        if (!$X){
            return $i;
        }
    }
    
    return -1; 
}

var_dump(solution($X, $A));