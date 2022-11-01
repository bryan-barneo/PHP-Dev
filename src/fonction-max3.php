<?php
function max3(int $a, int $b, int $c):int{
    if($a<$b){
        if($b<$c){
            return $c;
        }
        else return $b;
    }
    elseif($a<$c){
        return $c;
    }
    else{
        return $a;
    }
}
