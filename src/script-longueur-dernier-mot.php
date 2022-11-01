<?php
$a=0;
$m=0;
$c=0;
while($a!= '.'){
    $a=fgetc(STDIN);
    $c=$c+1;
    if($a== ' '){
    $m=$c;
    }
}
$t=$c-$m;
$t=$t-1;
echo('***');
echo($t);
echo('***');
