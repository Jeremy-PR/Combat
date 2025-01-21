<?php
require_once '../utils/autoloader.php';
session_start();

$hero = $_SESSION['hero'];
$monster = new Monster();

$combatResults = $hero->fight($monster);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat - Mon Jeu</title>


    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/Java script/combat.js" defer></script>

</head>
<body>

<section class="fight">
    <img src="./assets/img/héros.png" width="30%" class="hero-image">
 
    <section class="realfight">
        <div class="combat-log" id="combat-log">
         
        </div>
    </section>

    <img src="./assets/img/Tottaly.png" alt="" width="30%" class="monster-image">
</section>

<div class="actions">
    <a href="./home.php">Si Game Over clique ici</a>
</div>

<div class="actions">
    <a href="Fight2">Si victoire il y a, clique là</a>
</div>

<script>

        const combatResults = <?php echo json_encode($combatResults); ?>;
    </script>
</body>
</html>

