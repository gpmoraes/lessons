<?php

$S = "CAGCCTA";
$P = [2,5,0];
$Q = [4,5,6];

function solution($S, $P, $Q){
    // Here i will save the matrix with the values
    // of each "nucleotide"
    $S_matrix = [];
    // Final result
    $result  = [];
    // I needed to create the matrix with the initial values
    for ($i=0; $i < strlen($S); $i++) { 
        $S_matrix[0][$i] = 0; // nucleotide A
        $S_matrix[1][$i] = 0; // nucleotide C
        $S_matrix[2][$i] = 0; // nucleotide G
        $S_matrix[3][$i] = 0; // nucleotide T
    }
    
    // Look for each nucleotide in the string
    for($i = 0; $i < strlen($S); $i++){
        // Set value of the auxiliar variables
        $a = 0; $c = 0; $g = 0; $t = 0;

        switch ($S[$i]) {
            case "A":
                $a++;
            break;
            
            case "C":
                $c++;
            break;
            
            case "G":
                $g++;
            break;
            
            case "T":
                $t++;
            break;
        }

        // Here we apply the Prefix_Sum algorithm fo each nucleotide
        $S_matrix[0][$i+1] = $S_matrix[0][$i] + $a;
        $S_matrix[1][$i+1] = $S_matrix[1][$i] + $c;
        $S_matrix[2][$i+1] = $S_matrix[2][$i] + $g;
        $S_matrix[3][$i+1] = $S_matrix[3][$i] + $t;
    }
    
    // New we look for the smallest value in the range
    for ($i=0; $i < count($Q); $i++) { 
        $init = $P[$i];
        $end  = $Q[$i]+1;
        /**
         * Here we pound the $end first because the $init will be always smaller
         * now we can calculate id the nucleotide is in the range so i tested 
         * all from the smalest to the bigger integer "nucleotide".
         */
        if ($S_matrix[0][$end] - $S_matrix[0][$init] > 0) {
            $result[$i] = 1;
        } else 
        if ($S_matrix[1][$end] - $S_matrix[1][$init] > 0) {
            $result[$i] = 2;
        } else 
        if ($S_matrix[2][$end] - $S_matrix[2][$init] > 0) {
            $result[$i] = 3;
        } else 
        if ($S_matrix[3][$end] - $S_matrix[3][$init] > 0) {
            $result[$i] = 4;
        }
    } 
    
    return $result;
}

var_dump(solution($S, $P, $Q));