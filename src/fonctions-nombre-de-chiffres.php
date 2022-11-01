<?php
function nbDeChiffresDe(int $n):int{
    $t=0;
    while($n>1){
        $n=$n/10;
        $t=$t+1;
    }
    return $t;
}
function nbDeChiffresDuCarréDe(int $n):int{
    $x=0;
    $n=$n*$n;
    while($n>1){
        $n=$n/10;
        $x=$x+1;
    }
    return $x;
}