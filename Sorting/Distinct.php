<?php
$A = [2, 1, 3, 0, 23,5,6,7,4,54,34,8,85,9,75,566];

function solution($A) {
    $res = [];
    $count = 0;
    
    for($i=0; $i < count($A); $i++){
        if(!isset($res[$A[$i]])){
            $res[$A[$i]] = 1;
            $count++;
        }
    }
    
    return ($count);
}

var_dump(solution($A)); 