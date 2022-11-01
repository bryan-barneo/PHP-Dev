<?php
$n=readline();
require('fonction-fréquenceChiffres.php');
require('procédure-afficherTabEntiers.php');
afficherTabEntiers(fréquenceChiffres($n));
