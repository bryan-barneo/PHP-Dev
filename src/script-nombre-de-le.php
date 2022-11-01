<?php
$a=0;
$m=0;
while($a!= '.'){
    if($a!= 'l'){
        $a=fgetc(STDIN);}
    if($a== 'l'){
        $a=fgetc(STDIN);
        if($a== 'e'){
            $m=$m+1;
        }
    }
}
echo('***');
echo($m);
echo('***');
