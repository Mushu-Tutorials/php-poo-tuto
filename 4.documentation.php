<?php

$link_index = 'index.html';
echo "<a href='" . $link_index . "'><br><< Accéder à l'accueil<br></a>";
$link_chapiter3 = '3.form-example.php';
echo "<a href='" . $link_chapiter3 . "'><br><< Chapitre III</a>";
echo " | ";
$link_chapiter5 = '#';
echo "<a href='" . $link_chapiter5 . "'>Chapitre V >><br></a>";

require 'Form.php';

echo '<h1>CHAPITRE IV : La documentation PHP</h1><br>';


?>




<?php
echo "<a href='" . $link_index . "'><br><br><< Accéder à l'accueil<br></a>";
echo "<a href='" . $link_chapiter3 . "'><br><< Chapitre III</a>";
echo " | ";
echo "<a href='" . $link_chapiter5 . "'>Chapitre V >><br></a>";
?>