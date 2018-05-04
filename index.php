<?php

require 'Personnage.php';

echo '1. Initialisation d\'un nouveau personnage : Merlin :<br>';
$merlin = new Personnage();
var_dump($merlin);

echo '2. Appel de la fonction crier :<br>';
$merlin -> crier();

echo '3. Affichage d\'un des paramètres (vie) + modification :<br>';
var_dump($merlin -> vie);
$merlin -> vie = 100;
var_dump($merlin -> vie);
$merlin -> vie = 80;
var_dump($merlin -> vie);

echo '4. Appel de la fonction regenerer :<br>';
$merlin -> regenerer();
var_dump($merlin);

echo '5. Initialisation d\'un nouveau personnage : Harry :<br>';
$harry = new Personnage();
var_dump($harry);

echo '6. Définition des noms des Personnages :<br>';
$merlin -> nom = 'Merlin';
$harry -> nom = 'Harry';
var_dump($merlin, $harry);