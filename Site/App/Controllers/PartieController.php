<?php
namespace App\Controllers;
use \App\Classes\Zone;
use \App\Models\HeroModel;

class PartieController extends Controller {
    private $model;
    private $partie;
    private $zoneJoueur1;
    private $zoneJoueur2;


    public function index() {
        $this->initialisation();

    }

    public function initialisation() {
        $this->model = new \App\Models\ZoneModel;
        $this->partie = new \App\Models\PartieModel();
        $this->partie = $this->partie->insertPartie(START_PARTIE, START_TOUR, mktime(), START_DATE_FIN);
        
        $deck1 = $this->chargementJoueur1();
        $deck2 = $this->chargementJoueur2();
        var_dump($deck1);
        $h1 = $this->loadHero(1);
        $h2 = $this->loadHero(2);

        $this->render( 'boardView', \compact('deck1', 'deck2', 'h1', 'h2') );
    }


    public function loadHero($num) {
        $loadHero = new HeroModel;
        
        $myHero = $loadHero->getHero($num);
        $loadHero->insertHeroTemp($myHero->getPdv(), $myHero->getMana(), $this->partie->getId(), 1, $myHero->getId());
        return $myHero;
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