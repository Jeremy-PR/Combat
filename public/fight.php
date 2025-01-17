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
