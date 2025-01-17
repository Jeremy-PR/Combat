<?php
require_once '../utils/autoloader.php';
session_start();

if (isset($_SESSION['hero'])) {
    $hero = $_SESSION['hero'];
    $heroName = $hero->getName();
    $heroLife = $hero->getLife();
    $heroAttaque = $hero->getAttaque();
    $heroDefense = $hero->getDefense();
    $heroImage = $hero->getImage();
} else {
    header("Location: create-hero.php");
    exit;
}

$monster = new Monster();
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
        <img src="./assets/img/Franklin.png" alt="<?= htmlspecialchars($heroName) ?>" class="hero-image">
        <div class="hero-info">
            <h2><?= htmlspecialchars($heroName) ?></h2>
            <p><strong>Vie:</strong> <?= $heroLife ?> HP</p>
            <div class="hero-stats">
                <p><span>Attaque:</span> <?= $heroAttaque ?> </p>
                <p><span>Défense:</span> <?= $heroDefense ?> </p>
            </div>
        </div>
    </div>

    <div class="hero-card">
        <h2>Le Monstre : <?= htmlspecialchars($monster->getName()) ?></h2>
        <img src="./assets/img/Bugsbunny.png" alt="Image du monstre" class="hero-image">
        <p>Vie : <?= $monster->getLife() ?></p>
        <p>Attaque : <?= $monster->getAttack() ?></p>
        <p>Défense : <?= $monster->getDefense() ?></p>
    </div>

    <div class="actions">
        <a href="fight.php">Lancer le combat</a>
    </div>
</div>

</body>
</html>
