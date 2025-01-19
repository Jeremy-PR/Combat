
<?php 


header("Location: ./public/home.php");
exit;

// Fichier : index.php
// Ce qui est fait ici :
// Le code de ce fichier est très simple et sert à rediriger automatiquement l'utilisateur vers la page home.php.

// Redirection avec header() : La fonction header("Location: ./public/home.php"); est utilisée pour envoyer l'utilisateur vers la page d'accueil (home.php) dès qu'il arrive sur cette page. Cette redirection est immédiate, c'est-à-dire que dès que le fichier est chargé, l'utilisateur est dirigé vers l'autre page.

// Notion de PHP : La fonction header() en PHP est utilisée pour envoyer des entêtes HTTP avant d'afficher du contenu à l'utilisateur. Dans ce cas, elle sert à rediriger l'utilisateur vers une autre page. Il est important de noter que cette fonction doit être appelée avant tout autre contenu (comme du HTML), sinon elle ne fonctionnera pas.
// Arrêt du script avec exit : Après la redirection, le exit; est utilisé pour arrêter l'exécution du code. Cela signifie qu'aucun autre code ne sera exécuté après la redirection, garantissant ainsi que la page d'accueil est bien la première à être chargée.

// Notions de PHP utilisées :
// Redirection HTTP : Cette redirection vers une autre page est une technique courante en PHP, souvent utilisée après un traitement ou pour guider l'utilisateur vers la bonne section d'une application.

// Arrêt du script avec exit : Cela empêche tout code supplémentaire d’être exécuté après la redirection. C’est une bonne pratique pour contrôler le flux de l’application.

// Notions de POO :
// Il n’y a pas d’utilisation directe de la POO dans ce fichier puisque le code se concentre principalement sur la redirection de l'utilisateur. Cependant, ce fichier est souvent un point d'entrée dans un projet, avant de diriger l'utilisateur vers des pages où la POO et les classes entreront en jeu.

