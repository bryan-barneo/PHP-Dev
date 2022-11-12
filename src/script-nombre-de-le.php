<?php
$a=0;
$m=0;
$c=0;
while($a!="."){
    $a=fgetc(STDIN);
    if ($c==1) {
        if ($a=="e"){
            $m+=1;
        }
        $c=0;
    }
    if ($a=="l"){
        $c=1;
    }
    if ($a==" "){
        $c=0;
    }
}
echo('***');
echo($m);
echo('***');
