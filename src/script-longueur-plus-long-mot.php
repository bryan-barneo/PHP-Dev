<?php
$a=0;
$b=0;
$c=0;
$d=0;
while($a!= '.'){
    $a=fgetc(STDIN);
    $c=$c+1;
    if($a== ' '){
        $b=$c;
        $c=$c-$b;
        if($d<$b){
            $d=$b;
        }
    }
}
$d=$d-1;
echo('***');
echo($d);
echo('***');
