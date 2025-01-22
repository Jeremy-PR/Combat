<?php
session_start();
require_once '../utils/autoloader.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $heroRepository = new HeroRepository();


    $hero = $heroRepository->findByName($_POST['name']);

    if (!$hero) {

        $hero = new Hero(0, $_POST['name']);
        $hero->setLife(100);

        $hero->setImage('../public/assets/img/héros.png');

        $heroRepository->createHero($hero);
    }

    $_SESSION['hero'] = $hero;


    header("Location: ../public/before-fight.php");
    exit;
}






