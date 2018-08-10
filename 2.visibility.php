<?php

$link_index = 'index.html';
echo "<a href='" . $link_index . "'><br><< Accéder à l'accueil<br></a>";
$link_chapiter1 = '1.poo.php';
echo "<a href='" . $link_chapiter1 . "'><br><< Chapitre I</a>";
echo " | ";
$link_chapiter3 = '3.form-example.php';
echo "<a href='" . $link_chapiter3 . "'>Chapitre III >><br></a>";

require 'Personnage.php';

echo '<h1>CHAPITRE II : La visibilité Public / Private / Protected</h1><br>';


echo '1. Création des personnages<br>';
$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
var_dump($merlin, $harry);


echo "<br>2. Test d'appel de la variable privée (retirer le commentaire du code pour voir l'erreur)<br>";
echo "echo \$merlin -> surnom<br>";
// Enlever le commentaire pour voir l'erreur
echo $merlin -> surnom . "<br>";
echo '<br>';

echo '3. Appel du nom de la fonction via la fonction GET<br>';
var_dump( $merlin -> getSurnom());


echo '4. La portée de "protected"<br>';
echo "Elle fonctionne comme \"private\" mais aura une portée au niveau des classes qui héritent de celle courante.<br>";
echo '<br>';

echo '5. <br>';






echo "<a href='" . $link_index . "'><br><br><< Accéder à l'accueil<br></a>";
echo "<a href='" . $link_chapiter1 . "'><br><< Chapitre I</a>";
echo " | ";
echo "<a href='" . $link_chapiter3 . "'>Chapitre III >><br></a>";
