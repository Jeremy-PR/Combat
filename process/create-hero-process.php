<?php

require_once '../utils/autoloader.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $heroRepository = new HeroRepository();


    $hero = $heroRepository->findByName($_POST['name']);

    if (!$hero) {

        $hero = new Hero(0, $_POST['name']);
        $hero->setLife(100);
       
        $hero->setImage('default.jpg');

        $heroRepository->createHero($hero);
    }


    $_SESSION['hero'] = $hero;


    header("Location: ../public/before-fight.php");
    exit;
}





