<?php
function aChiffresTousDifferents(int $n):bool{
    $y=1;
    $array=array(0,0,0,0,0,0,0,0,0,0);
    while($n>=1 and $y==1){
        $r1=$n%10;
        $n=intdiv($n, 10);
        $array[$r1]++;
        if($array[$r1]>1){
            $y=0;
        }
    }
    return $y;
}
