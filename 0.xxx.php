<?php

$link_index = 'index.html';
echo "<a href='" . $link_index . "'><br><< Accéder à l'accueil</a>";
$link_chapiterX = '0.xxx.php';
echo "<a href='" . $link_chapiterX . "'>Chapitre x >><br></a>";
echo " | ";
$link_chapiterX = '0.xxx.php';
echo "<a href='" . $link_chapiterX . "'>Chapitre x >><br></a>";

require 'Personnage.php';

echo '<h1>CHAPITRE x : xxx</h1><br>';





echo "<a href='" . $link_index . "'><br><< Accéder à l'accueil</a>";
echo "<a href='" . $link_chapiterX . "'><br><< Chapitre X</a>";
echo " | ";
echo "<a href='" . $link_chapiterX . "'>Chapitre X >><br></a>";
