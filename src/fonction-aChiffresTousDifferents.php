<?php
function aChiffresTousDifferents(int $n):bool{
    $TousDifferents=1;
    $array=array(0,0,0,0,0,0,0,0,0,0);
    while($n>=1 and $TousDifferents==1){
        $r1=$n%10;
        $n=intdiv($n, 10);
        $array[$r1]++;
        if($array[$r1]>1){
            $TousDifferents=0;
        }
    }
    return $TousDifferents;
}
