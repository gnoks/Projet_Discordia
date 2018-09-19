<?php
require_once 'ControllerLoadingFunc.php';
require_once '../model/round.php';
require_once 'ControllerLoadingHeros.php';

if(!isset($round)) {
    $chargement = new chargement();
    $round = new round(0);
    $hero = new ControllerHeros();

    $chargement -> chargementJoueur1();
    $chargement -> chargementJoueur2();

    if($hero -> heroRdm() == 1) {
        $hero1 = $hero -> heroIrma();
        $hero2 = $hero -> heroMiss();
    } else {
        $hero2 = $hero -> heroIrma();
        $hero1 = $hero -> heroMiss();
    }
}


require ('../view/boardView.php');