<?php
namespace App\Classes;
class Partie {
    private $id;
    private $victoire;
    private $tour;
    private $debutPartie;
    private $finPartie;

    public function __construct($id, $victoire, $tour, $finPartie) {
        $this->id = $id;
        $this->victoire = $victoire;
        $this->tour = $tour; 
        $this->debutPartie = mktime();
        $this->finPartie = $finPartie;
    }

    public function getId() {
        return $this->id;
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