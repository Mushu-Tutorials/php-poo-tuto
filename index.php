<?php

require 'Personnage.php';

// Initialisation d'un nouveau personnage : Merlin
$merlin = new Personnage();
var_dump($merlin);
// Affichage d'un des paramètres : la vie
var_dump($merlin -> vie);

// Initialisation d'un nouveau personnage : Harry
$harry = new Personnage();
var_dump($harry);
