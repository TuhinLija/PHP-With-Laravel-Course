<?php

$i=1;
function sum(...$numbers){

    $limit= count($numbers);
    for($i=0; $i<$limit; $i++){
        $res += $numbers[$i];

    }

    echo $res;
}
sum(1,2,3,4,5,6);