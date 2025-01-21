<?php


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez votre héros</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>


    <div class="create-hero-section">
        <h2>Fight in the Garage</h2>

        <form action="../process/create-hero-process.php" method="POST" class="create-hero-form">

            <label for="name">Donnez un nom à votre héros</label>
            <!-- <div class="tenor-gif-embed" data-postid="13940508" data-share-method="host" data-aspect-ratio="0.990991" data-width="100%"><a href="https://tenor.com/view/mortal-kombat-mk-dragon-dragon-fire-sigil-gif-13940508">Mortal Kombat Mk Sticker</a>from <a href="https://tenor.com/search/mortal+kombat-stickers">Mortal Kombat Stickers</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script> -->
            <input type="text" id="name" name="name" placeholder="Entrez un nom" required>

            <button type="submit" class="create-button">Let's Go</button>
        </form>
    </div>

</body>

</html>



<!-- Voici l'explication de ce que tu as mis en place dans le fichier home.php, en tenant compte des concepts POO et PHP utilisés :

Fichier : public/home.php
Ce qui est fait ici :
Ce fichier sert de page d'accueil où l'utilisateur peut créer un héros. Il contient un formulaire qui envoie le nom du héros à la page de traitement create-hero-process.php pour que le héros soit créé et enregistré dans la base de données.

Session avec session_start() :

session_start(); : Cette fonction permet de démarrer une session PHP. Elle est utilisée ici pour permettre de suivre l'utilisateur à travers les différentes pages de l'application. Par exemple, une fois qu'un héros est créé, tu peux stocker les informations du héros dans la session et les récupérer sur d'autres pages.
Formulaire HTML :

Action du formulaire : Le formulaire utilise la méthode POST pour envoyer les données à la page create-hero-process.php (dans le dossier process/). Cela signifie que les données seront envoyées de manière sécurisée et ne seront pas visibles dans l'URL.
Champ de texte : L'utilisateur entre le nom de son héros dans un champ input avec l'attribut name="name". Ce champ est requis, ce qui signifie qu'il doit obligatoirement être rempli avant de soumettre le formulaire.
Bouton de soumission : Le bouton Créer permet de soumettre le formulaire et d'envoyer les données vers le fichier de traitement create-hero-process.php.
Affichage dynamique :

Tu as inclus une animation GIF via un script externe de Tenor. Ce GIF pourrait être utilisé pour donner un peu de fun à la page, mais il ne joue pas un rôle fonctionnel dans la logique du projet.
Notions de PHP utilisées :
Sessions : Comme mentionné, session_start() est utilisé pour démarrer une session PHP, ce qui permettra de suivre l'utilisateur entre différentes pages (par exemple, pour stocker le héros créé).
Formulaire HTML avec POST : Le formulaire envoie des données via la méthode POST au fichier create-hero-process.php, où ces données seront traitées.
Notions de POO utilisées :
Il n’y a pas de POO utilisée directement dans ce fichier home.php car il s'agit principalement d'une interface utilisateur et de la gestion d'un formulaire.
Cependant, il est prévu que ce fichier interagisse avec des objets et des classes dans d'autres fichiers du projet. Par exemple, après que l'utilisateur crée un héros, le formulaire redirige vers create-hero-process.php, où un objet de type Hero sera créé et géré.
En résumé :
Ce fichier : Sert de page d'accueil où l'utilisateur peut entrer un nom pour son héros et soumettre ce nom via un formulaire.
Session PHP : Permet de stocker temporairement des données liées à l'utilisateur entre les pages.
Interaction avec un formulaire : Utilise un formulaire pour permettre à l'utilisateur d'envoyer des données, qui seront ensuite traitées dans un autre fichier PHP.
C'est un bon début pour l'interface du jeu, car il permet à l'utilisateur d'interagir avec l'application et de commencer à créer son héros.

Si tu veux que je continue avec une autre partie du projet, n'hésite pas à m'envoyer plus de fichiers ! 😊 -->