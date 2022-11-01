<?php
require('procedure-repeteCarac.php');
function pyramideSimple(int $n, string $car): void
{
    $c = $n;
    $n = 1;
    echo ' ';
    for ($i = 0; $i < $c; $i++) {
        repeteCarac($n, $car);
        echo "\na";
        $n = $n + 2;
    }
}