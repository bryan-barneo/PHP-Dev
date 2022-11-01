<?php
$a = readline();
$b = $a;
$b = $a % 400;
$c = $a;
$d = $a;
if ($b == 0) {
    echo 'année bissextile';
} elseif ($c % 4 == 0 and $d % 100 != 0) {
    echo 'année bissextile';
} else {
    echo 'année non bissextile';
}