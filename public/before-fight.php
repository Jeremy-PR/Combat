<?php
require_once '../utils/autoloader.php';
session_start();

$hero = $_SESSION['hero'];

$heroRepository = new HeroRepository();
$heroRepository->updateLife($hero);
$monster = new Monster();

$heroName = $hero->getName();
$heroLife = $hero->getLife();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avant le combat</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>



    <div class="beforeFight">

        <div class="create-hero-section">
            <h2 class="card"><?= htmlspecialchars($heroName) ?></h2>
            <img src="./assets/img/héros.png" class="hero-image">
            <p class="card">Vie : <?= $hero->getLife() ?></p>
        </div>



        <div class="create-hero-section">
            <h2 class="card"><?= htmlspecialchars($monster->getName()) ?></h2>
            <img src="<?= htmlspecialchars($monster->getImage()) ?>" alt="<?= htmlspecialchars($monster->getName()) ?>" class="monster-image">
            <p class="card">Vie : <?= $monster->getLife() ?></p>
        </div>

    </div>

    <div class="actions">
        <a href="./fight.php">LET'S GO TO THE FIGHT</a>
    </div>

    <div class="actions">
        <a href="./home.php">Si plus de vie, retour à l'accueil</a>
    </div>
    </div>

</body>

</html>

<!-- Objectif du fichier
Ce fichier est la page avant le début du combat. Il sert à afficher les informations du héros et du monstre avant que le combat n'ait lieu. Il permet au joueur de visualiser ses stats et de se préparer pour le combat en cliquant sur un lien qui le redirige vers la page fight.php.

Explication du code
Session et Autoloading :

Le fichier commence par inclure le fichier autoloader.php via require_once pour charger automatiquement les classes nécessaires.
Ensuite, la session est démarrée avec session_start(), permettant d'accéder à la session existante et de récupérer les données du héros stockées précédemment (lors de sa création).
Récupération des données :

Le héros est récupéré à partir de la session avec $_SESSION['hero']. Cela suppose que l'utilisateur a déjà créé un héros et qu'il est stocké dans la session.
Un monstre est également créé (là, il n'y a pas de base de données pour les monstres, donc un objet Monster est simplement instancié avec ses valeurs par défaut).
Affichage des informations du héros :

Les informations du héros (nom et vie) sont récupérées via les méthodes getName() et getLife() de l'objet Hero.
L'image du héros est affichée en utilisant une balise <img>, et la vie du héros est affichée dans un paragraphe.
Affichage des informations du monstre :

Les informations du monstre (nom et vie) sont également récupérées avec des méthodes similaires, puis affichées sous forme d'éléments HTML.
Le nom du monstre est récupéré via getName() et sa vie via getLife().
Lien vers le combat :

Un lien est fourni pour permettre à l'utilisateur de commencer le combat. Ce lien redirige l'utilisateur vers la page fight.php.
Notions de POO et PHP utilisées :
Session et gestion des données utilisateur : Utilisation de $_SESSION pour garder les données du héros entre les différentes pages.
Encapsulation et méthodes d'accès : Les informations du héros et du monstre sont récupérées via des méthodes publiques (getName() et getLife()), ce qui permet de maintenir l'encapsulation des données.
Création d'objets : Un objet Hero est récupéré de la session et un objet Monster est instancié. Cela montre l'utilisation de la POO pour manipuler des entités complexes avec des attributs et des méthodes.
HTML dynamique avec PHP : Le contenu de la page est généré dynamiquement en PHP, ce qui permet d'afficher les données des objets dans le HTML.
Conclusion :
Ce fichier montre une utilisation de la programmation orientée objet (POO) avec des objets comme Hero et Monster, la gestion des sessions en PHP pour stocker et récupérer des données utilisateurs, et l'affichage dynamique des informations dans une page web. C'est une bonne mise en place pour un jeu dynamique où les entités (héros, monstres) sont gérées via des objets et interagissent entre elles.
 -->