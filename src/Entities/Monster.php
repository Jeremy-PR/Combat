  <?php
  
  class Monster {
    private string $name;
    private int $life;
    private string $image;

    public function __construct(string $name = "Robot404", int $life = 100, string $image = "../public/assets/img/robot.png")
    {
        $this->name = $name;
        $this->life = $life;
        $this->image = $image; // Image par défaut assignée
    }


   
    public function getName(): string {
        return $this->name;
    }

    public function getLife(): int {
        return $this->life;
    }

    public function setLife(int $life): void {
        $this->life = $life;
    }


    public function getImage(): string {
        return $this->image;
    }

    public function hit (Hero $hero): int{

        $damage = rand(10,20) ;       
          
          $hero -> setLife($hero -> getLife()- $damage);
  
          return $damage;
          }
    
}


// Fichier : Monster.php
// Ce qui est fait ici :
// Ce fichier définit une classe Monster qui représente un monstre dans le jeu. La classe gère les propriétés et méthodes liées à un monstre, comme son nom, ses points de vie, son image, et son action de frapper un héros.

// Classe Monster :

// La classe Monster représente un monstre avec plusieurs attributs et comportements, comme son nom, ses points de vie, et l'action d'attaquer un héros. C'est également une classe métier qui modélise un objet spécifique dans le jeu.
// Propriétés de la classe :

// private string $name; : Le nom du monstre. Il est défini par défaut dans le constructeur.
// private int $life; : La vie du monstre. Elle est initialisée à 100 par défaut dans le constructeur.
// private string $image; : L'image du monstre. L'image est laissée vide par défaut dans le constructeur.
// Le constructeur (__construct) :

// public function __construct() : Le constructeur initialise les propriétés du monstre avec des valeurs par défaut. Le nom est défini sur "BugsBunny", la vie est de 100 et l'image est vide. Il est possible de modifier ces valeurs plus tard en utilisant des méthodes spécifiques.
// Méthodes d'accès (Getters et Setters) :

// La classe utilise des getters et setters pour permettre d'accéder et de modifier les propriétés de l'objet de manière sécurisée.
// getName() : Permet de récupérer le nom du monstre.
// getLife(), setLife() : Permet de récupérer et de modifier la vie du monstre.
// getImage() : Permet de récupérer l'image du monstre. Elle est vide par défaut, mais on pourrait potentiellement ajouter une image.
// Méthode hit() :

// public function hit(Hero $hero): int : Cette méthode représente l'attaque du monstre contre un héros. Elle génère des dégâts aléatoires entre 10 et 15, et inflige ces dégâts au héros.
// Typage : La méthode prend un objet de type Hero en paramètre et retourne un int (les dégâts infligés).
// Le monstre attaque le héros, ce qui entraîne la diminution des points de vie du héros.
// Notions de PHP utilisées :
// Constructeur (__construct) : Le constructeur initialise les propriétés de l'objet avec des valeurs par défaut. Cela permet de garantir que chaque monstre aura un nom, une vie, et une image dès qu'il est créé.
// Getters et Setters : Comme pour la classe Hero, on utilise des getters et setters pour accéder aux propriétés de manière sécurisée et structurée.
// Type hinting : Les méthodes utilisent des types pour les paramètres (par exemple, Hero $hero) et pour les valeurs de retour (par exemple, int). Cela assure que les bonnes données sont passées et retournées.
// Notions de POO utilisées :
// Encapsulation : Les propriétés $name, $life, et $image sont privées, ce qui signifie qu'elles ne peuvent pas être directement modifiées ou lues de l'extérieur de la classe. On utilise des getters et setters pour accéder à ces données de manière contrôlée.
// Interaction entre classes : La méthode hit() prend un objet de type Hero comme paramètre. Cela montre l'interaction entre les classes Monster et Hero. Cette méthode permet au monstre d'infliger des dégâts au héros pendant un combat.
// Comportement et état : Le monstre a un état interne (sa vie) et un comportement (il attaque le héros), ce qui est un concept central en POO : encapsuler les propriétés et les méthodes qui manipulent ces propriétés dans une même unité (la classe).
// En résumé :
// Ce fichier implémente la classe Monster qui représente un monstre dans le jeu.
// Le monstre possède des propriétés comme le nom, la vie, et l'image, et il peut attaquer un héros via la méthode hit().
// Cette classe est construite en utilisant les principes fondamentaux de la POO, notamment l'encapsulation (en protégeant les propriétés avec des getters et setters) et l'interaction entre objets (le monstre attaque un héros, qui est un autre objet).
// La logique du combat (dégâts aléatoires infligés au héros) est gérée par la méthode hit().
