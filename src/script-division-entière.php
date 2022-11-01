<?php
echo('entrer un nombre: ');
$nombreentrée=readline();
echo("\n");
echo('entrer un dividende: ');
$dividende=readline();
$nombre=$nombreentrée;
$résultat=0;
$reste=fmod($nombre, $dividende);
$nombre=$nombre-$reste;
$résultat=$nombre/$dividende;
echo($nombreentrée);
echo(' = ');
echo($dividende);
echo(' X ');
echo($résultat);
echo(' + ');
echo($reste);