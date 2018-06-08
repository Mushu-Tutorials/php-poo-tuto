# php-poo-tuto
Learn POO with PHP

# L'arborescence

```
|\index.php
| |
|  \classes
|   |
|   |\classe1.php
|   |\classe2.php
|   |\classe3.php
```

# L'Objet

Syntaxe de mon objet. On y retrouve les variables, les fonctions et leur visibilité (public, private, protected)

```php
class Personnage {
  // Propriétés de la classe
  public $vie = 80;
  public $atk = 20;
  public $nom;

  public function __construct($name) {
    $this -> nom = $name;
  }

  public function crier() {
    echo 'LEROY JENKINS';
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
  }
}
```

## Le constructor : __construct()

C'est une fonction qui permet de définir les paramètres de l'objet. Ici le nom du personnage.

```php
  public function __construct($name) {
    $this -> nom = $name;
  }
```

## Les fonctions

Les fonctions définissent les actions qui pourront être faites lors de l'instanciation de mon objet.

### Régénérer mon personnage

Ici, si on ne met pas de paramètre lors de l'appel de la fonction, on régénère entièrement la vie du personnage. En revanche lorsqu'on précise une quantité, on régénère le personnage à hauteur de cette dernière.

```php
  public function regenerer($life = null) {
    if(is_null($life)) {
      $this -> vie = 100;      
    } else {
      $this -> vie += $life;
    }
  }
}
```

### Vérifier si mon personnage est mort

Ici, on renvoie _true_ si le personnage est __mort__ et _false_ s'il est en vie.

```php  
public function mort() {
  if($this -> vie < 1) {
    $this -> vie = 0;
    return true;
  } else {
    return false;
  }
}
```

### Attaquer un autre personnage

On attaque un autre personnage. L'attaquant (`$this`) retire en fonction de son __atk__ de la __vie__ au défenseur (`$cible`).

```php
public function attaque($cible) {
  $cible -> vie -= $this -> atk;
}
```

## La visibilité Public / Private

```php
class Personnage {
  public $vie = 80;
  public $atk = 20;
  public $nom;
}
```

# Le Main

Fichier où sont créés les objets et où sont appelés les différentes méthodes

## Initialisation d'un nouvel objet

```php
$merlin = new Personnage('Merlinn');
$harry = new Personnage('Harryy');
```

## Appel des paramètres de l'objet et interactions

```php
$merlin -> vie = 80;
$merlin -> nom = 'Merlin';

$harry -> vie = 95;
$harry -> nom = 'Harry';
```

## Appel des méthodes

```php
$merlin -> crier();
$merlin -> regenerer(5);

$harry -> regenerer();
$harry -> mort();

$merlin -> attaque($harry);
```

