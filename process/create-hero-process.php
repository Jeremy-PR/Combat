<?php

require_once '../utils/autoloader.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $heroRepository = new HeroRepository();


    $hero = $heroRepository->findByName($_POST['name']);

    if (!$hero) {

        $hero = new Hero(0, $_POST['name']);
        $hero->setLife(100);
        $hero->setAttaque(20);
        $hero->setDefense(15);
        $hero->setImage('default.jpg');

        $heroRepository->createHero($hero);
    }


    $_SESSION['hero'] = $hero;


    header("Location: ../public/before-fight.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Héros</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>
    <h1>Créer un Héros</h1>
    <form method="POST">
        <label for="name">Nom du héros :</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Créer le héros</button>
    </form>
</body>

</html>



