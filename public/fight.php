<?php
require_once '../utils/autoloader.php';
session_start();



    $hero = $_SESSION['hero'];
    $monster = new Monster();
    

$heroName = $hero->getName();
$heroLife = $hero->getLife();


$realfight = [];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <a class = "combat" href="">Lancer le combat </a>
</body>
</html>