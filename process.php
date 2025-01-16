<?php

require_once './utils/autoloader.php';

var_dump($_POST);

session_start();

$heroRepository = new HeroRepository();

$hero = $heroRepository->findByName($_POST['username']);


if(!$hero){
    $herorRepository->createHero($_POST['username']);
    $hero = $heroRepository->findByName($_POST['username']);
}

$_SESSION['hero'] = $hero;

header("Location: ../public/fight.php");