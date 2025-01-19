
<?php


class HeroMapper implements MapperContract {
        public static function mapToObject(array $loginData):Hero
        {
            return new Hero(
                $loginData['id'],
                $loginData['name'],
                $loginData['life'],
            );
        }
}

// Fichier : HeroMapper.php
// Ce qui est fait ici :
// Le fichier contient une classe HeroMapper qui implémente l'interface MapperContract que nous avons vue précédemment. Cette classe fournit une implémentation spécifique de la méthode mapToObject qui transforme un tableau de données en un objet Hero.

// Classe HeroMapper :
// La classe HeroMapper implémente l'interface MapperContract, ce qui signifie qu'elle doit définir la méthode mapToObject telle que spécifiée dans l'interface.
// Méthode mapToObject :
// public static function mapToObject(array $loginData): Hero : Cette méthode prend un tableau de données ($loginData) en entrée et retourne un objet de type Hero.
// Elle crée un nouvel objet Hero en utilisant les données du tableau $loginData. Les clés du tableau sont utilisées pour initialiser les propriétés de l'objet Hero : id, name, et life.
// Le constructeur de la classe Hero est appelé avec ces valeurs pour créer l'objet Hero.
// Notions de PHP utilisées :
// Implémentation d'une interface : La classe HeroMapper implémente l'interface MapperContract. Cela assure que la méthode mapToObject sera présente dans la classe, comme prévu par l'interface.
// Méthode statique : La méthode mapToObject est statique, ce qui signifie qu'elle peut être appelée sans avoir besoin d'instancier un objet HeroMapper. Cela permet d'utiliser cette méthode pour convertir un tableau en objet de manière simple et directe.
// Retourner un objet : La méthode mapToObject retourne un objet de type Hero. En PHP, il est possible de définir le type de retour d'une méthode, ici spécifié par Hero, ce qui permet de garantir que cette méthode renverra toujours un objet de cette classe.
// Notions de POO utilisées :
// Implémentation du contrat (interface) : Comme la classe HeroMapper implémente l'interface MapperContract, elle suit le contrat défini par cette dernière, ce qui garantit que toutes les classes qui implémentent MapperContract auront une méthode mapToObject.
// Création d'objets : La méthode mapToObject est responsable de créer des objets Hero à partir de données brutes (le tableau $loginData). Cela permet de garder la logique de création des objets centralisée et évite de dupliquer ce code ailleurs dans l'application.
// Abstraction : La classe HeroMapper abstrait le processus de transformation des données en un objet Hero, ce qui permet de simplifier la gestion des données dans l'application.
// En résumé :
// Le fichier définit une classe HeroMapper qui implémente l'interface MapperContract.
// La méthode mapToObject de la classe prend un tableau de données et crée un objet Hero avec ces données.
// Cela utilise des concepts de POO tels que l'implémentation d'une interface, la création d'objets, et l'abstraction du processus de transformation des données.
