<?php

$X = 0;
$Y = 0;
$D = 0;
// Funcion to generate the values to test
function genArray(&$X, &$Y, &$D){
    $max = 1000000000000000;
    $X = rand(0, $max);
    $Y = rand($X, $max);
    $D = rand(0, $max);
}

function solution($X, $Y, $D){
    $result = 0;
    // If $X is equals to $Y no jump is necessary
    // so returns zero
    if ($X != $Y) {
        $result = ($Y - $X)/$D;
        // Round up the result
        $result = (int) ceil($result);
    }

    return $result;
}

genArray($X, $Y, $D);
echo "X: " . $X . " Y: " . $Y . " D: " . $D . PHP_EOL;
var_dump(solution($X, $Y, $D)); 