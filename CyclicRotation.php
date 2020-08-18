<?php
// Create randon integer
$K = 0;
$A = [];
// Generate the array values
function genArray(&$A){
    $N = rand(0, 1000);
    for ($i=0; $i < $N; $i++) { 
        $value = rand(-1000, 1000);
        array_push($A, $value);
    }
}

function solution($A, $K){
    // Var
    $Alen = count($A);
    $result = [];

    if ($Alen != $K && $Alen > 1) {
      for ($j=0; $j < $K; $j++) { 
            array_push($result, $A[$Alen-1]);
            for ($i=0; $i < $Alen-1; $i++) { 
                array_push($result, $A[$i]);
            }
            $A = $result;
            $result = [];
        }
    }
    return $A;
}

genArray($A);
var_dump(solution($A, $K));