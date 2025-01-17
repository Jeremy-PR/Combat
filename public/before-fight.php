<?php
require_once '../utils/autoloader.php';
session_start();



    $hero = $_SESSION['hero'];
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

<header>
    <h1>Préparez-vous pour le combat</h1>
</header>

<div class="hero-section">
  

    <div class="hero-card">
        <h2><?= htmlspecialchars($heroName) ?></h2>
        <img src="./assets/img/Franklin.png"  class="hero-image">
        <div class="hero-info">
            <p>Vie : <?= $hero->getLife() ?></p>     
        </div>
    </div>

    <div class="hero-card">
        <h2> <?= htmlspecialchars($monster->getName()) ?></h2>
        <img src="./assets/img/Bugsbunny.png" alt="Image du monstre" class="hero-image">
        <p>Vie : <?= $monster->getLife() ?></p>
        
    </div>

    <div class="actions">
        <a href="fight.php">Allez vous battre</a>
    </div>
</div>

</body>
</html>
