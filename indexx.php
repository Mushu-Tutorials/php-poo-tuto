<?php

// http://localhost/php-poo-tuto/index.html

// require 'Personnage.php';

echo '<br>------------------------------------------------------------<br><br>';

$link_chapiter1 = '1.poo.php';
echo "<a href='" . $link_chapiter1 . "'>Accéder au Chapitre I<br></a>";
include_once '1.poo.php';

echo '<br>------------------------------------------------------------<br><br>';

$link_chapiter2 = '2.visibility.php';
echo "<a href='" . $link_chapiter2 . "'>Accéder au Chapitre II<br></a>";
include_once '2.visibility.php';

echo '<br>------------------------------------------------------------<br><br>';