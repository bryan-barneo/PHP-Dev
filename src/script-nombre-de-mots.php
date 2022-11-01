<?php
$m=1;
$a=0;
while ($a!= '.'){
$a=fgetc(STDIN);
if($a== ' '){
$m=$m+1;
}
}
echo('***');
echo($m);
echo('***');