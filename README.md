# php-poo-tuto
Learn POO with PHP

## L'arborescence

```
|\index.php
| |
|  \classes
|   |
|   |\classe1.php
|   |\classe2.php
|   |\classe3.php
```

## Mon Objet

Syntaxe de mon objet. On y retrouve les variables, les fonctions et leur visibilité (public, private, protected)

```php
class Personnage {

  // Propriétés de la classe
  public $vie = 80;
  public $atk = 20;
  public $nom;

  public function crier() {
    echo 'LEROY JENKINS';
  }

  public function regenerer() {
    $this -> vie = 100;
  }
}
```

## Mon Main

Fichier où sont créés les objets et où sont appelés les différentes méthodes

### Initialisation d'un nouvel objet

```php
$merlin = new Personnage();
$harry = new Personnage();
```

### Appel des paramètres de l'objet et interactions

```php
$merlin -> vie = 100;
$merlin -> nom = 'Merlin';

$harry -> vie = 80;
$harry -> nom = 'Harry';
```

### Appel des méthodes

```php
$merlin -> crier();
$merlin -> regenerer();
```

