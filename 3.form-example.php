<?php

$link_index = 'index.html';
echo "<a href='" . $link_index . "'><br><< Accéder à l'accueil<br></a>";
$link_chapiter2 = '2.visibility.php';
echo "<a href='" . $link_chapiter2 . "'><br><< Chapitre II</a>";
echo " | ";
$link_chapiter4 = '3.form-example.php';
echo "<a href='" . $link_chapiter4 . "'>Chapitre IV >><br></a>";

require 'Form.php';

echo '<h1>CHAPITRE III : Exemple de Formulaire</h1><br>';

$form = new Form(array(
    'username' => 'Roger'
));
var_dump($form);
// Cette commande ne fonctionnera pas car la variable $data est PRIVATE
// var_dump($form -> data);

echo $form -> input('username');
echo $form -> input('password');
echo $form -> submit();


// Créer un nouveau formulaire
echo '<br>Nouveau formulaire<br>';
$form = new Form(array(
    'username' => 'Roger'
));

echo $form -> input('azerty');
echo $form -> input('azerty');
echo $form -> input('azerty');
echo $form -> input('azerty');
echo $form -> submit();

// Créer un nouveau formulaire qui renvoi ce qui a été rempli
echo '<br>Nouveau formulaire qui renvoi ce qui a été rempli<br>';
$form = new Form($_POST);
?>

<form action="#" method=post>
    <?php 
        echo $form -> input('username');
        echo $form -> input('password');
        echo $form -> submit();
    ?> 
</form>


<?php
echo "<a href='" . $link_index . "'><br><br><< Accéder à l'accueil<br></a>";
echo "<a href='" . $link_chapiter2 . "'><br><< Chapitre II</a>";
echo " | ";
echo "<a href='" . $link_chapiter4 . "'>Chapitre IV >><br></a>";
?>