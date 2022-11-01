<?php
$np=0;
$ni=0;
$nombre=readline();
while($nombre!=0){
$nombre=readline();
if ($nombre&1) {
    $ni=$ni+1;
}
else
    $np=$np+1;
}
echo ('il y a au total ');
echo($np);
echo(' nombre pair');
echo("\n");
echo('il y a au total ');
echo($ni);
echo(' nombre impair');
echo("\n");
