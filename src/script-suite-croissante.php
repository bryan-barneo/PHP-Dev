<?php
$a=readline();
$b=0;
$d=0;
$i=0;
while($i<$a){
    $i++;
    $c=readline();
    if($c<$b){
        $d=$d+1;
    }
    else {
        $b=$c;
    }
}
if($d!=0){
    echo 'faux';
}
else{
    echo 'vrai';
}
