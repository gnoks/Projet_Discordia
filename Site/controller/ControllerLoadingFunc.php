<?php

require_once '../model/carteManager.php';
require_once '../model/plateau.php';

class chargement {
    public function chargementJoueur1() {
        $Manager = new carteManager();
        $plateauJoueur1 = new plateau();
    
        //Creation des tableaux
        $listePioche1 = $Manager->generePioche($plateauJoueur1->getPioche()); //Requete bdd
    
        //Génére le tableau main
        $listeMain1 = $plateauJoueur1->getMain();
        //Génére le tableau board
        $listeBoard1 = $plateauJoueur1->getBoard();
    
        $plateauJoueur1->melangerCartes($listePioche1);
        $plateauJoueur1->piocherCarte($listePioche1, $listeMain1, 3);
        

        return $listePioche1;
    }
    
    public function chargementJoueur2() {
        $Manager = new carteManager();
        $plateauJoueur2 = new plateau();
    
        //Creation des tableaux
        $listePioche2 = $Manager->generePioche($plateauJoueur2->getPioche()); //Requete bdd
    
        //Génére le tableau main
        $listeMain2 = $plateauJoueur2->getMain();
        //Génére le tableau board
        $listeBoard2 = $plateauJoueur2->getBoard();
    
        $plateauJoueur2->melangerCartes($listePioche2);
        
    
        return $listePioche2;
    }

    
}