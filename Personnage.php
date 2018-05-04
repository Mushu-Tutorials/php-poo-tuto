<?php 

class Personnage {

  // Propriétés de la classe
  public $vie = 80;
  public $atk = 20;
  public $nom;

  public function crier() {
    echo 'LEROY JENKINS';
    echo '<br><br>';
  }

  public function regenerer() {
    $this -> vie = 100;
  }
}
