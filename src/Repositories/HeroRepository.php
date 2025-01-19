<?php


class HeroRepository extends AbstractRepository
{
    final public function construct()
    {
        parent::__construct();
    }

    public function findByName(string $name): ?Hero
    {
        $stmt = $this->pdo->prepare("SELECT * FROM hero WHERE name = :name");
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->execute();


        $heroData = $stmt->fetch();

        if (!$heroData) {
            // Si aucun héros trouvé, retourner null
            // Vous pouvez définir une valeur par défaut pour 'life' comme 100
            return null;
        }
        return HeroMapper::mapToObject($heroData);
    }


    public function createHero(Hero $hero): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO hero (name, life) VALUES (:name, :life)");
        $stmt->execute([
            ':name' => $hero->getName(),
            ':life' => $hero->getLife()
        ]);

        // Récupérer l'ID généré
        $hero->setId($this->pdo->lastInsertId());
    }
}

// Ce qui est fait ici :
// Ce fichier contient une classe HeroRepository qui hérite de AbstractRepository et gère l'accès aux données liées aux héros dans la base de données.

// Classe HeroRepository :

// La classe HeroRepository hérite de AbstractRepository, ce qui lui permet de bénéficier de la connexion à la base de données via la propriété $pdo. Cela permet de gérer facilement les interactions avec la base de données, comme la recherche d'un héros par son nom ou la création d'un nouveau héros.
// Méthode construct :

// La méthode construct() redéfinit le constructeur de la classe parente AbstractRepository, bien que dans ce cas précis, elle ne fasse rien de particulier. Cela peut être utile si tu prévois de personnaliser davantage le comportement du constructeur dans la classe HeroRepository à l'avenir, mais pour l'instant, cela n'apporte aucune modification.
// Méthode findByName() :

// Cette méthode permet de chercher un héros en fonction de son nom dans la base de données.
// prepare() est utilisée pour créer une requête SQL sécurisée avec des paramètres.
// bindParam() permet de lier le paramètre :name dans la requête à la variable $name.
// fetch() récupère les données du héros sous forme de tableau associatif.
// Si aucun héros n'est trouvé avec le nom donné, la méthode retourne null. Sinon, elle utilise le HeroMapper::mapToObject() pour convertir les données récupérées en un objet Hero.
// Méthode createHero() :

// Cette méthode permet d'insérer un nouveau héros dans la base de données.
// Une requête SQL INSERT INTO hero est préparée et exécutée avec les valeurs du nom et de la vie du héros.
// Une fois l'insertion effectuée, la méthode utilise lastInsertId() pour récupérer l'ID généré automatiquement par la base de données pour ce héros et le définit à l'aide de la méthode setId() de l'objet Hero.
// Notions de PHP et POO utilisées :
// Héritage :

// HeroRepository hérite de AbstractRepository, ce qui lui permet de réutiliser la connexion à la base de données déjà mise en place dans AbstractRepository. L'héritage est utilisé ici pour éviter la duplication du code de connexion à la base de données.
// PDO (PHP Data Objects) :

// PDO est utilisé ici pour préparer et exécuter les requêtes SQL. Cela permet d'éviter les injections SQL et d'assurer une gestion sécurisée des requêtes.
// Mapping avec HeroMapper :

// La méthode findByName() utilise HeroMapper::mapToObject() pour transformer les données récupérées de la base de données en un objet Hero. Cela suit le principe du mapping, qui est une manière courante de convertir des données brutes en objets dans la programmation orientée objet.
// Types de données :

// Méthode findByName() : Elle retourne un ?Hero, ce qui signifie que la méthode peut soit retourner un objet Hero si un héros est trouvé, soit null si aucun héros n'est trouvé. C'est une bonne pratique de spécifier les types de retour dans les méthodes.
// Encapsulation :

// Les méthodes getName(), getLife(), et setId() permettent de manipuler les propriétés de l'objet Hero de manière contrôlée. Cela permet d'éviter que ces propriétés ne soient modifiées directement à l'extérieur de la classe.
// En résumé :
// HeroRepository gère les interactions avec la base de données pour les héros, permettant de trouver un héros par son nom et d'en créer de nouveaux.
// Elle utilise PDO pour effectuer des requêtes SQL sécurisées et utilise HeroMapper pour transformer les résultats de la base de données en objets Hero.
// Cette classe suit les principes de la POO, tels que l'héritage (de AbstractRepository), l'encapsulation, et le mapping des données.
