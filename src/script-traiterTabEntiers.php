<?php
$n=readline();
require('fonction-saisirTabEntiers.php');
$array=saisirTabEntiers($n);
require('fonction-moyenne.php');
echo moyenneTab($array);