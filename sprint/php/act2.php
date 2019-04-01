<?php 
$mon_age =24;
$mon_nom = 'leticia';

$nombre1 = 2 + 4; // $nombre prend la valeur 6
$nombre2 = 5 - 1; // $nombre prend la valeur 4
$nombre3 = 3 * 5; // $nombre prend la valeur 15
$nombre4 = 10 / 2; // $nombre prend la valeur 5

$vrai = true;
$faux = false;
$null = Null;
echo "je m'appele ";
echo $mon_nom;
echo " et j'ai ";
var_dump($mon_age);
echo " ans    <br>";
echo "je m'appele $mon_nom et j'ai $mon_age ans <br>";

echo "la valeur de nombre est $nombre1 <br>";
echo "la valeur de nombre est $nombre2 <br>";
echo "la valeur de nombre est $nombre3 <br>";
echo "la valeur de nombre est $nombre4 <br>";

echo "leticia est a l'ecole 241? true ou false <br>";
var_dump($vrai) ;
?>