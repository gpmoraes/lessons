<?php
/**
 * I solved this problem by creating an associative array where
 * any integer on $A became a key in $result
 * and any time this integer appears in the for loop the value of 
 * the key will be added one.
 */

// Array of integers
$A = [9,3,9,3,9,7,9];

function solution($A){
    // Variables
    $smallest = 0;         // Will save the non repeat integer
    $Alen     = count($A); // Size of the array
    $result   = [];        // Array generate by the search on $A

    // "Look" all the integers in the array
    for ($i=0; $i < $Alen; $i++) { 
        // Verify if the key already exists in the array
        if (array_key_exists($A[$i], $result)) {
            // If repeat more than 2 times so it is a new pair
            if ($result[$A[$i]] == 2) {
                $result[$A[$i]] = 0;
            }
            $result[$A[$i]] += 1;
        } else {
            $result[$A[$i]] = 1;
        }
    }
    // Search for the key of the number one at the array
    $smallest = array_search(1, $result);
    return $smallest;
}
// Print the value that do not repeat
var_dump(solution($A));