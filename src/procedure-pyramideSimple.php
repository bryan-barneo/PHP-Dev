<?php
require('procedure-repeteCarac.php');
function pyramideSimple(int $n, string $car): void
{
    for($i=0; $i<$n; $i++){
        repeteCarac($n -$i," ");
        repeteCarac($i * 2+1, $car);
        echo "\n";
    }
}
