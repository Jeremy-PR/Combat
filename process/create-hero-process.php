<?php

require_once '../utils/autoloader.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $heroRepository = new HeroRepository();


    $hero = $heroRepository->findByName($_POST['name']);

    if (!$hero) {

        $hero = new Hero(0, $_POST['name']);
        $hero->setLife(100);
       
        $hero->setImage('default.jpg');

        $heroRepository->createHero($hero);
    }


    $_SESSION['hero'] = $hero;


    header("Location: ../public/before-fight.php");
    exit;
}





// create-hero-process.php
// Objectif :
// Le fichier create-hero-process.php permet de créer un héros à partir des informations fournies par l'utilisateur via un formulaire. Si le héros avec le même nom existe déjà, il le récupère depuis la base de données, sinon, il crée un nouveau héros et l'ajoute à la base de données. Une fois le héros créé ou trouvé, il est stocké dans la session et l'utilisateur est redirigé vers la page before-fight.php pour préparer le combat.

// Explication du code :
// Chargement des classes :

// Le fichier autoloader.php est inclus au début pour permettre le chargement automatique des classes, comme HeroRepository et Hero. Cela évite d'avoir à inclure manuellement chaque fichier PHP nécessaire.
// Démarrage de la session :

// session_start() est appelé pour démarrer la session PHP et permettre l'utilisation de $_SESSION. Cela permet de stocker des informations, comme l'objet Hero, que l'on souhaite rendre accessibles sur d'autres pages, comme before-fight.php.
// Vérification du formulaire :

// Le code vérifie que la requête HTTP est bien de type POST et que le champ name a été envoyé dans le formulaire. Si ces conditions sont remplies, le traitement continue.
// Récupération du héros :

// HeroRepository est instancié pour interagir avec la base de données.
// La méthode findByName() est utilisée pour rechercher un héros existant dans la base de données en fonction du nom envoyé via le formulaire. Si le héros est trouvé, il est récupéré et l'utilisateur peut commencer à jouer avec lui.
// Création d'un nouveau héros :

// Si aucun héros avec ce nom n'est trouvé dans la base de données ($hero est null), un nouveau héros est créé avec le nom donné dans le formulaire. Le héros est initialisé avec une vie de 100 et une image par défaut (default.jpg).
// Le héros est ensuite ajouté à la base de données en appelant la méthode createHero() du repository HeroRepository.
// Stockage du héros dans la session :

// L'objet Hero est stocké dans la session avec $_SESSION['hero'] = $hero;. Cela permet de garder une trace du héros créé ou récupéré, afin de l'utiliser dans d'autres pages comme before-fight.php.
// Redirection :

// Après avoir créé ou récupéré le héros, l'utilisateur est redirigé vers la page before-fight.php à l'aide de header("Location: ../public/before-fight.php");. Cela permet de préparer le combat en affichant les informations du héros et du monstre avant de commencer le combat proprement dit.
// Notions de POO et PHP utilisées :
// Appels de méthodes :
// Le code utilise la méthode findByName() de HeroRepository pour rechercher un héros existant, ainsi que la méthode createHero() pour ajouter un nouveau héros à la base de données.
// La création d'un nouvel objet Hero se fait via son constructeur new Hero(0, $_POST['name']).
// Gestion de la session :
// Les informations sur le héros sont stockées dans la session pour pouvoir les utiliser dans différentes pages de l'application.
// L'utilisation de $_SESSION permet de conserver l'état du jeu entre les différentes pages (par exemple, entre la création du héros et la page de combat).
// Vérification des données utilisateur :
// Le code vérifie que la requête est bien une méthode POST et que le champ name existe dans les données envoyées.
// Redirection :
// La redirection vers une autre page est effectuée via header("Location: ..."), une technique courante en PHP pour rediriger l'utilisateur après un traitement.
// Résumé :
// Le fichier create-hero-process.php est responsable de la gestion de la création d'un héros. Si le héros existe déjà dans la base de données, il est récupéré, sinon, un nouveau héros est créé et ajouté à la base de données. Ensuite, ce héros est stocké dans la session et l'utilisateur est redirigé vers la page before-fight.php pour préparer le combat. La logique s'appuie sur la POO avec l'utilisation des classes Hero et HeroRepository pour gérer la création et la récupération des héros.














