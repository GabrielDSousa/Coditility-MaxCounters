<?php

/**
 * @param int $N
 * @param array $A
 * @return array
 */

function solution($N, $A) : array
{
    $increase = array_fill(0, $N, 0);
    $len = count($A);
    for ($i=0; $i<$len; $i++){
        if($A[$i] <= $N){
            $increase[$A[$i]-1] += 1;
        }else{
            $increase = array_fill(0, $N, max($increase));
        }
    }
    return $increase;
}

$A = [3,4,4,6,1,4,4];
$N = 5;
$S = solution($N, $A);

echo "[ ";
foreach ($S as $s){
    echo $s." ";
}
echo "]";