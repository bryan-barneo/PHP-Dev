<?php
function fréquenceChiffres(int $n):array{
    $array=array(0,0,0,0,0,0,0,0,0,0);
    while($n>=1){
        $r1=$n%10;
        $n=intdiv($n, 10);
$array[$r1]++;
    }
    return $array;
}
