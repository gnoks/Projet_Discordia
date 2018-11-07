<?php
namespace App\Controllers;
use \App\Classes\Zone;
use \App\Models\HeroModel;

class PartieController extends Controller {
    private $model;
    private $partie;
    private $hero;
    private $heroTemp;

    public function index() {
        $this->initialisation();

    }

    public function initialisation() {
        $this->model = new \App\Models\ZoneModel;
        $this->partie = new \App\Models\PartieModel();
        $this->partie = $this->partie->insertPartie(START_PARTIE, START_TOUR, mktime(), 0);
        

        $h1 = $this->loadHero(1);
        $h2 = $this->loadHero(2);

        $deck1 = $this->chargementJoueur();
        $deck2 = $this->chargementJoueur();


        $this->render( 'boardView', \compact('deck1', 'deck2', 'h1', 'h2') );
    }


    public function loadHero($num) {
        $loadHero = new HeroModel;
        
        $this->hero = $loadHero->getHero($num);
        $this->heroTemp = $loadHero->insertHeroTemp($this->hero->getPdv(), $this->hero->getMana(), $this->partie->getId(), 1, $this->hero->getId());
        return $this->hero;
    }


    public function chargementJoueur() {
        $this->zoneJoueur = new Zone();

        //Creation des tableaux
        $listePioche = $this->model->generePioche($this->zoneJoueur->getPioche(), $this->heroTemp); //Requete bdd
        
        //Génére le tableau main
        $listeMain = $this->zoneJoueur->getMain();

        //Génére le tableau board
        $listeBoard = $this->zoneJoueur->getBoard();

        $this->zoneJoueur->melangerCartes($listePioche);

        $this->zoneJoueur->piocherCarte($listePioche, $listeMain, NB_PIOCHE);

        return $listeMain;
    }
    


    
}