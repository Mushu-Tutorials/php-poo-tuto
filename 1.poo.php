<?php
require 'Personnage.php';

echo '1. Initialisation d\'un nouveau personnage et<br>';
echo 'appel du CONSTRUCTEUR via la définition du nom Merlin :<br>';
$merlin = new Personnage('Merlinn');
var_dump($merlin);

echo '2. Appel de la fonction crier :<br>';
$merlin -> crier();

echo '3. Affichage d\'un des paramètres (vie) + modification :<br>';
var_dump($merlin -> vie);
$merlin -> vie = 100;
var_dump($merlin -> vie);
$merlin -> vie = 80;
var_dump($merlin -> vie);

echo '4. Initialisation d\'un nouveau personnage : Harry :<br>';
$harry = new Personnage('Harryy');
var_dump($harry);

echo '5. Re-définition des noms des Personnages via les PARAMÈTRES :<br>';
$merlin -> nom = 'Merlin';
$harry -> nom = 'Harry';
var_dump($merlin, $harry);

echo '6. Appel de la fonction regenerer avec ou sans paramètre :<br>';
$merlin -> regenerer(5);
$harry -> regenerer();
var_dump($merlin, $harry);

echo '7. Appel de la fonction MORT retournant un booléan<br>';
$harry -> vie = -2;
$harry -> mort();
var_dump($harry -> vie, $harry -> mort());
$harry -> regenerer();

echo '8. Appel d\'un objet au sein d\'une fonction<br>';
$merlin -> attaque($harry);
var_dump($merlin, $harry);

echo '9. On vérifie si Harry a survécu à l\'attaque :<br>';
if($harry -> mort()) {
    echo 'Harry est mort';
} else {
    echo 'Harry a survécu avec ' . $harry -> vie . ' de vie.<br>';
}

echo '10. On attaque Harry jusqu\'à la mort :<br>';
while($harry -> vie != 0) {
    $merlin -> attaque($harry);
}
if($harry -> mort()) {
    echo 'Harry est mort';
} else {
    echo 'Harry a survécu avec ' . $harry -> vie . ' de vie.<br>';
}