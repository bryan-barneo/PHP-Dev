<?php
$m=0;
$a=0;
while($a!= '.'){
$a=fgetc(STDIN);
if($a== 'm'){
$m=$m+1;}
}
echo('***');
echo($m);
echo('***');
