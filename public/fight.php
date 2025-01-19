<?php
require_once '../utils/autoloader.php';
session_start();


$hero = $_SESSION['hero'];  

$monster = new Monster();


$heroName = $hero->getName();
$heroLife = $hero->getLife();


$combatResults = $hero->fight($monster);  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>
<section class="realfight">
    <div class="combat-log">
        <?php foreach ($combatResults as $result): ?>
            <p><?= htmlspecialchars($result) ?></p>
        <?php endforeach; ?>
    </div>
</section>

</body>
</html>


<!-- fight.php
Objectif :
Cette page représente le combat entre le héros et le monstre. Elle affiche les résultats du combat en temps réel, montrant les actions (attaques et dégâts) des deux personnages jusqu'à ce que l'un d'eux perde toute sa vie. Le combat est géré par la méthode fight() de l'objet Hero.

Explication du code :
Session et Autoloading :

Le fichier autoloader.php est inclus au début pour permettre le chargement automatique des classes.
La session est démarrée avec session_start() pour pouvoir récupérer les informations du héros qui ont été stockées lors de sa création (en utilisant $_SESSION).
Récupération des données :

L'objet Hero est récupéré depuis la session avec $_SESSION['hero'], qui contient le héros créé par l'utilisateur.
Un objet Monster est créé pour représenter l'adversaire dans le combat.
Déclenchement du combat :

Le nom et la vie du héros sont récupérés à l'aide des méthodes getName() et getLife() de la classe Hero.
Le combat est lancé en appelant la méthode fight() sur l'objet Hero. Cette méthode prend l'objet Monster en paramètre, et elle retourne un tableau $combatResults contenant les résultats des actions durant le combat (par exemple, les dégâts infligés à chaque tour).
Affichage des résultats :

Les résultats du combat sont affichés dans une section HTML à l'intérieur d'une boucle foreach, où chaque élément de $combatResults est une action spécifique du combat (attaque, dégâts, etc.).
Chaque résultat est affiché dans un paragraphe HTML (<p>), et le contenu est sécurisé grâce à la fonction htmlspecialchars(), qui empêche les attaques XSS.
HTML dynamique avec PHP :

Le contenu de la page, notamment les résultats du combat, est généré dynamiquement avec PHP en utilisant les données du combat (comme les attaques et les dégâts).
Notions de POO et PHP utilisées :
Appels de méthodes d'objets : La méthode fight() de l'objet Hero est utilisée pour gérer le combat entre le héros et le monstre. La méthode getName() et getLife() sont utilisées pour obtenir les informations du héros.
Manipulation de tableaux : Le tableau $combatResults est utilisé pour stocker et afficher les différentes étapes du combat.
Encapsulation : Les informations du héros sont récupérées via des méthodes d'accès (getName(), getLife()) afin de maintenir l'encapsulation des données et éviter une modification directe de ses propriétés.
HTML dynamique avec PHP : Le PHP est utilisé pour afficher les résultats du combat de manière dynamique, en insérant le contenu généré par PHP dans le code HTML de la page.
Résumé :
Cette page gère le déroulement du combat entre le héros et le monstre. Elle utilise la POO pour interagir avec les objets Hero et Monster, et les résultats du combat sont affichés dynamiquement à l'utilisateur grâce à PHP. La logique du combat est exécutée dans la méthode fight() de l'objet Hero, et chaque étape est présentée au joueur sous forme de texte à l'aide de PHP et HTML.



 -->



