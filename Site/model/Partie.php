<?php

class Partie {
    private $tour;
    private $victoire;
    private $debutPartie;
    private $finPartie;

    public function __construct($debutPartie, $finPartie) {
        $this->tour = 0; 
        $this->victoire = 0;
        $this->debutPartie = $debutPartie;
        $this->finPartie = $finPartie;
    }
    
    public function getTour() {
        return $this->tour;
    }

    public function getVictoire() {
        return $this->victoire;
    }

    public function getDebutPartie() {
        return $this->debutPartie;
    }

    public function getFinPartie() {
        return $this->finPartie;
    }

    public function tourSuivant($tour) {
        return $tour += 1;
    }


}