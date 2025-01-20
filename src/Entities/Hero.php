<?php

class Hero
{
    private int $id;
    private string $name;
    private int $life;
    private string $image;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->life = 100;  // Vie de départ
        $this->image = "../public/assets/img/Franklin.png";  // Image par défaut
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): void
    {
        $this->life = $life;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

   
    public function hit(Monster $monster): int
    {
        $damage = rand(10, 20); 
        $monster->setLife($monster->getLife() - $damage);  
        return $damage;
    }


    public function fight(Monster $monster): array
    {
        $combatResults = [];
        

        while ($this->getLife() > 0 && $monster->getLife() > 0) {
            
           
            $damageToMonster = $this->hit($monster);
            $combatResults[] = $this->getName() . " attaque le monstre et lui inflige " . $damageToMonster . " de dégâts.";

          
            if ($monster->getLife() <= 0) {
                $combatResults[] = $monster->getName() . " a été vaincu !";
                break;
            }
            
           
            $damageToHero = $monster->hit($this);  
            $combatResults[] = $monster->getName() . " attaque " . $this->getName() . " et lui inflige " . $damageToHero . " de dégâts.";
            
          
            if ($this->getLife() <= 0) {
                $combatResults[] = $this->getName() . " a été vaincu !";
                break;
            }
        }

        return $combatResults;
    }
}




// <!-- Fichier : Hero.php
// Ce qui est fait ici :
// Ce fichier définit une classe Hero qui représente un héros dans le jeu. La classe gère les propriétés et méthodes liées à un héros, comme son nom, ses points de vie, son image, et ses actions pendant un combat.

// Classe Hero :

// La classe Hero représente un héros avec plusieurs attributs et comportements, tels que son nom, ses points de vie, et l'action de combattre un monstre. C'est une classe métier qui modélise un objet spécifique dans l'application.
// Propriétés de la classe :

// private int $id; : L'identifiant unique du héros.
// private string $name; : Le nom du héros.
// private int $life; : La vie du héros. Elle est initialisée à 100 par défaut dans le constructeur.
// private string $image; : L'image du héros. Une image par défaut est définie dans le constructeur.
// Le constructeur (__construct) :

// public function __construct(int $id, string $name) : Le constructeur initialise les propriétés du héros avec l'ID et le nom passés en paramètre. La vie est définie à 100 et l'image à un chemin par défaut.
// C'est ici que l'objet Hero prend forme lorsqu'il est instancié, avec les valeurs de départ pour ses propriétés.
// Méthodes d'accès (Getters et Setters) :

// La classe utilise des getters et setters pour permettre d'accéder et de modifier les propriétés de l'objet de manière sécurisée.
// getId(), setId() : Pour récupérer et modifier l'ID du héros.
// getName(), setName() : Pour récupérer et modifier le nom du héros.
// getLife(), setLife() : Pour récupérer et modifier la vie du héros.
// getImage(), setImage() : Pour récupérer et modifier l'image du héros. La méthode getImage() peut retourner null si aucune image n'est définie.
// Méthode hit() :

// public function hit(Monster $monster): int : Cette méthode représente l'action du héros qui attaque un monstre. Le nombre de dégâts infligés est aléatoire, entre 10 et 20. Le monstre subit ces dégâts et la méthode retourne les dégâts infligés.
// Typage : La méthode prend un objet de type Monster en paramètre et retourne un int (les dégâts infligés).
// Méthode fight() :

// public function fight(Monster $monster): array : Cette méthode gère le combat entre le héros et un monstre. Elle effectue des échanges de coups (tour par tour) entre les deux jusqu'à ce que l'un d'eux soit vaincu.
// À chaque tour, le héros attaque d'abord le monstre, puis le monstre attaque le héros.
// Le résultat du combat est stocké dans un tableau $combatResults qui est renvoyé à la fin.
// La méthode continue jusqu'à ce que l'un des combattants perde toute sa vie (les points de vie deviennent inférieurs ou égaux à 0).
// Notions de PHP utilisées :
// Constructeur (__construct) : Le constructeur est une méthode spéciale qui permet d'initialiser les propriétés d'un objet lorsqu'il est créé. Ici, il sert à donner des valeurs par défaut (vie à 100, image par défaut) et à initialiser l'ID et le nom du héros.
// Getters et Setters : Utilisation de méthodes pour accéder aux propriétés privées d'un objet. Cela garantit une gestion sécurisée des données et permet de maintenir l'encapsulation.
// Type hinting : Des types sont définis pour les paramètres des méthodes et pour leur valeur de retour (int, string, Monster). Cela aide à éviter des erreurs en s'assurant que les bonnes données sont passées et renvoyées.
// Notions de POO utilisées :
// Encapsulation : Les propriétés de l'objet sont privées (par exemple, $id, $name, $life, $image), ce qui signifie qu'elles ne peuvent pas être accédées directement depuis l'extérieur de la classe. On utilise des getters et setters pour y accéder ou les modifier.
// Méthode d'instance : Les méthodes comme hit() et fight() sont des méthodes d'instance, car elles modifient ou interagissent avec les propriétés de l'objet courant (le héros).
// Interaction avec une autre classe (Monster) : La méthode hit() prend un objet Monster en paramètre, ce qui montre une interaction entre la classe Hero et une autre classe métier Monster. Cela reflète le concept de coopération entre objets dans la POO.
// Design de combat : Le combat se déroule en alternant les attaques du héros et du monstre. Ce mécanisme est intégré dans la méthode fight(), qui implémente un combat tour par tour avec une logique de jeu.
// Retour de données : La méthode fight() renvoie un tableau contenant le résultat du combat. Cela permet de suivre l'évolution du combat et de communiquer des informations à l'utilisateur ou à d'autres parties du programme.
// En résumé :
// Ce fichier implémente la classe Hero qui représente un personnage joueur dans le jeu.
// Il permet de gérer ses propriétés (ID, nom, vie, image), ses actions (attaque via la méthode hit()), et sa participation à un combat avec un Monster (méthode fight()).
// L'utilisation des getters, setters, et des méthodes comme hit() et fight() montre une bonne application des principes de la POO, en particulier l'encapsulation et l'interaction entre objets. -->
