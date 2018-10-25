<?php
namespace App\Classes;
/**
 * Zone class 
 */
class Zone {
    protected $main;
    protected $defausse;
    protected $board;
    protected $pioche;

    public function __construct() {
        $this->main = array();
        $this->defausse = array();
        $this->board = array();
        $this->pioche = array();
    }

    //Getters
    public function getMain() {
        return $this->main;
    }
    public function getDefausse() {
        return $this->defausse;
    }
    public function getBoard() {
        return $this->board;
    }
    public function getPioche() {
        return $this->pioche;
    }


    public function piocherCarte(array &$pioche, array &$main, int $nb){
        for ($i=0; $i < $nb; $i++) { 
            $main[] = $pioche[0];
            array_shift($pioche);
        }
    }

    public function deplacerCarte(array &$tab1, array &$tab2, $i) {
        $tab2[] = $tab1[$i];
        array_shift($tab1);
    }

    public function melangerCartes(array &$pioche){
        shuffle($pioche);
     }

}
