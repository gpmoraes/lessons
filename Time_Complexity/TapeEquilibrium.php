<?php
// Test array
$A = [-10, -20, -30, -40, 100];
//$A = [3,1,2,4,3];

function solution($A){
    $Asize = count($A);
    $ch_1  = array_sum($A);
    $ch_2  = 0;
    $diff  = 0;
    // Some times array_sum can return zero
    // so i sum all the absolute values 
    for ($i=0; $i < $Asize; $i++) { 
        $diff += abs($A[$i]);
    }
    // If there are only 2 then is no need to 
    // run a loop
    if ($Asize == 2) {
        return abs($A[0] - $A[1]);
    }
    // N need to be < than N
    for ($i=0; $i < $Asize -1; $i++) {
        $ch_1 -= $A[$i];
        $ch_2 += $A[$i];
        $res   = abs($ch_2 - $ch_1);
        // Keep always the smallest
        if ($res < $diff) {
            $diff = $res;
        }
    }
    // Return the result
    return $diff;
}

var_dump(solution($A));
