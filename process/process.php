<?php

require_once '../utils/autoloader.php';

var_dump($_POST);

session_start();

$heroRepository = new HeroRepository();

$hero = $heroRepository->findByName($_POST['name']);


if(!$hero){
    $herorRepository->createHero($_POST['name']);
    $hero = $heroRepository->findByName($_POST['name']);
}

$_SESSION['hero'] = $hero;

header("Location: ./public/fight.php");