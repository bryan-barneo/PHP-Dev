<?php
$u1=1;
$u2=0;
$r=0;
$un=readline();
    for($c=0; $c<$un; $c=$c++){
    $r=$u1+$u2;
    $u1=$u2;
    $u2=$r;
    $c=$c+1;
    }
    echo('###');
    echo($r);
    echo('###');
