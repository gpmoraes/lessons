<?php

$A = 11;
$B = 345;
$K = 17;

function solution($A, $B, $K){
    $count = 0;
    $sum = 0;

    // realiza sucessivas somas e ve se o valor está menos que o máximo

    while ($sum < $B) {
        $sum += $K;
        var_dump("SOMA: " . $sum);
        if ($sum <= $B) {
            $count++;
        }
    }
    return $count;
}

var_dump(solution($A, $B, $K));