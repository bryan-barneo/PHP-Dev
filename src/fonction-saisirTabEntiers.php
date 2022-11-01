<?php
Function saisirTabEntiers(int $n):array{
    $Tab=[];
    for($i=0; $i<$n;$i++){
        $Tab[$i]=readline();
    }
    return $Tab;
}
