<?php

$A = [0,1,0,1,1];

function solution($A) {
    $A_sum = $A; // Stores the PrefixSum of $A
    $res   = 0;  // Stores the answer
    // Applying the PrefixSum
    for($i = 1; $i < count($A); $i++){
        $A_sum[$i] += $A_sum[$i-1];
    }
    /**
     * I check if the position is a zero in the array $A
     * At this point I only check the diference between the
     * value on the index in the array $A_sum and the last integer 
     * in this array the sum between these number is the answer
     */
    for($i = 0; $i < count($A); $i++){
        if($A[$i] == 0){
            $res += $A_sum[count($A)-1] - $A_sum[$i];
        }
    }
    // Check if the answer is bigger than 1.000.000.000
    if($res > 1000000000){
        return -1;
    }
    return $res;
}

var_dump(solution($A));
