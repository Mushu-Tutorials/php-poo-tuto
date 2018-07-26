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
  private $surnom;

  public function __construct($name) {
    $this -> nom = $name;
    $this -> surnom = "Mon petit $name";
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
    $cible -> vie_negative();
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

## La visibilité Public / Private / Protected

Une variable __privée__ ne sera pas visible en dehors de la classe. Il en est de meme pour une variable __protected__ (ici la visibilité s'étend aux classe qui hérite de celle courante).  
Pour récupérer les variables __private__ il faut utiliser les __fonctions get__. Pour les modifier il faut utiliser les __fonctions set__.
```php
class Personnage {
  public $vie = 80;
  public $atk = 20;
  public $nom;
  private $surnom;

  public function getSurnom() {
    return $this -> surnom;
  }

  
}
```

On peut rentre privé les fonctions comme ci dessous. Cela permet de montrer que cette fonction n'est utilisée que dans la classe Personnage et qu'il n'y a pas d'intérêt à la modifier. Elle sera juste appelée dans la fonction concernée (ici `attaque()`).
```php
private function vie_negative() {
  if ($this -> vie < 0) {
    $this -> vie = 0;
  }
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

