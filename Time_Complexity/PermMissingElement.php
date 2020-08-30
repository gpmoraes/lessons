<?php

$A = [];
// Funcion to generate the values to test
function genArray(&$A){
    $max = 1000;
    $n = rand(1, $max);

    for ($i=0; $i < $max; $i++) { 
        if ($i == $n) {
            $i++;
            $max += 1;
        }
        array_push($A, $i);
    }
}

function solution($A){
    $Alen = count($A)+1;
    $result = $Alen * ($Alen + 1 )/2;
    return $result - array_sum($A);
}

genArray($A);
var_dump(solution($A));