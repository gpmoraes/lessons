<?php
$A = [1, 3, 6, 4, 1, 2];

function solution($A) {
    $res = [];
    // Organize and sort the values and save on the array
    foreach($A as $key => $value){
        $val = $value -1;
        if($value > 0){
            if(!isset($res[$val])){
                $res[$val] = 1;
            }
        }
    }
    // If was all negative values
    if(count($res) == 0){
        return 1;
    }
    // If the value is null it is the answer
    for($i=0;$i<count($res);$i++){
        if(!isset($res[$i])){
            return $i+1;
        }
    }
    // If the array is complete the answer is N+1
    return count($res)+1;
}

var_dump(solution($A));