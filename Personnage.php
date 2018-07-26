<?php 

class Personnage {

  // Propriétés de la classe
  public $vie = 80;
  public $atk = 20;
  public $nom;
  private $surnom;

  public function __construct($name) {
    $this -> nom = $name;
    $this -> surnom = "Mon petit $name";
  }

  // CHAPITRE I : La POO
  public function crier() {
    echo 'LEROY JENKINS';
    echo '<br><br>';
  }

  public function regenerer($life = null) {
    if(is_null($life)) {
      $this -> vie = 100;      
    } else {
      $this -> vie += $life;
    }
  }

  public function mort() {
    if($this -> vie < 1) {
      $this -> vie = 0;
      return true;
    } else {
      return false;
    }
  }

  public function attaque($cible) {
    $cible -> vie -= $this -> atk;
    $cible -> vie_negative();
  }

  // CHAPITRE I : La POO
  public function getSurnom() {
    return $this -> surnom;
  }

  private function vie_negative() {
    if ($this -> vie < 0) {
      $this -> vie = 0;
    }
  }

  public function setSurnom($name) {
    $this -> surnom = $name;
  }


}
