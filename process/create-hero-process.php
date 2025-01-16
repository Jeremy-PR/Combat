<?php

require_once '../utils/autoloader.php';

session_start();

$heroRepository = new HeroRepository();

$hero = $heroRepository->findByName($_POST['name']);


if(!$hero){

    $hero = new Hero(0, $_POST['name']);
    $heroRepository->createHero($hero);
    $hero = $heroRepository->findByName($_POST['name']);
}

$_SESSION['hero'] = $hero;

header("Location: ../public/choice-fighter.php");