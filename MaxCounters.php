<?php

$A = [3,4,4,6,1,4,4];
//$A = [6, 6, 6, 6, 6, 6];
$N = 5;

function solution($N, $A){
    $counters = [];
    $max_value = 0;
    $max_ctl   = 0;
    // Generate the array
    for ($i=0; $i < $N; $i++) { 
        $counters[$i] = 0;
    }
    // Access all values on the $A
    foreach ($A as $key => $value) {
        $position = $value-1;
        
        if ($position < $N) {
            // If is the first acces in this position
            if ($counters[$position] == 0) {
                $counters[$position] = $max_value;
            }
            // If the value is smaller than the  MAX
            if ($counters[$position] < $max_value) {
                $counters[$position] = $max_value;
            }
            // Increments one on the current value
            $counters[$position] += 1;
            // Store the bigger value of the $counters
            if ($counters[$position] > $max_ctl) {
                $max_ctl = $counters[$position];
            }

        } else {
            // If the position is bigger than $N sets var
            $max_value = $max_ctl;
        }
    }
    // All positions smaller than MAX are equal MAX
    for ($i=0; $i < $N; $i++) { 
        if ($counters[$i] < $max_value || $counters[$i] == 0) {
            $counters[$i] = $max_value;
        }
    }
    // Return the array result
    return $counters;
}

var_dump(solution($N, $A));