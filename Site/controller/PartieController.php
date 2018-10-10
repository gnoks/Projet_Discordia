<?php

class PartieController {
    private $model;
    private $partie;
    private $zoneJoueur1;
    private $zoneJoueur2;


    public function __construct() {

        //Chargement de la partie
        $this->model = new ZoneModel;
        $this->partie = new Partie(0,0);
    }

    public function show(){
        $load = new PartieController;
        $deck1 = $load -> chargementJoueur1();
        $deck2 = $load -> chargementJoueur2();
        include( 'views/inc/header.php' );
        include( 'views/BoardView.php' );
        include( 'views/inc/footer.php' );
    }

    public function loadHero1() {
        return new Hero("Miss Camping", "Je suis une miss");
    }

    public function loadHero2() {
        return new Hero("Madame Irma", "Je suis une madame");
    }

    public function chargementJoueur1() {
        $this->zoneJoueur1 = new Zone();
    
        //Creation des tableaux
        $listePioche1 = $this->model->generePioche($this->zoneJoueur1->getPioche()); //Requete bdd
        
        //Génére le tableau main
        $listeMain1 = $this->zoneJoueur1->getMain();
        //Génére le tableau board
        $listeBoard1 = $this->zoneJoueur1->getBoard();

        $this->zoneJoueur1->melangerCartes($listePioche1);
        $this->zoneJoueur1->piocherCarte($listePioche1, $listeMain1, 3);
        
        return $listePioche1;
    }
    
    public function chargementJoueur2() {
        $this->zoneJoueur2 = new Zone();

        //Creation des tableaux
        $listePioche2 = $this->model->generePioche($this->zoneJoueur2->getPioche()); //Requete bdd
    
        //Génére le tableau main
        $listeMain2 = $this->zoneJoueur2->getMain();
        //Génére le tableau board
        $listeBoard2 = $this->zoneJoueur2->getBoard();
    
        $this->zoneJoueur2->melangerCartes($listePioche2);
        
        $this->zoneJoueur2->piocherCarte($listePioche2, $listeMain2, 3);

        return $listePioche2;

    }

    
}