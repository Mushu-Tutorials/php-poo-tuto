<?php

$link_index = 'index.html';
echo "<a href='" . $link_index . "'><br><< Accéder à l'accueil</a>";
echo " | ";
$link_chapiter2 = '2.visibility.php';
echo "<a href='" . $link_chapiter2 . "'>Chapitre II >><br></a>";

require 'Personnage.php';

echo '<h1>CHAPITRE II : La visibilité public / private</h1><br>';

echo '1. Création des personnages';
$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
var_dump($merlin, $harry);




$link_index = 'index.html';
echo "<a href='" . $link_index . "'><br><< Accéder à l'accueil</a>";
echo " | ";
$link_chapiter2 = '2.visibility.php';
echo "<a href='" . $link_chapiter2 . "'>Chapitre II >><br></a>";
