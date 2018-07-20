<?php

require 'Form.php';

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
