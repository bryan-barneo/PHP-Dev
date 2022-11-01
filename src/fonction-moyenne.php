<?php
function moyenne(array $array):float{
    $x=0;
    foreach($array as $n){
        $x=$x+$n;
    }
    $y=count($array);
    $moyenne=$x/$y;
    return $moyenne;
}

