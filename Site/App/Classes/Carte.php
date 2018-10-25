<?php
namespace App\Classes;
/**
 * Carte class
 * Priopriété d'une carte
 */
class Carte {
    private $nom;
    private $mana;
    private $degats;
    private $description;
    private $position;
    private $pdv;

    public function __construct($nom, $degats, $mana, $description, $position)
    {
        $this->nom = $nom; 
        $this->degats = $degats;
        $this->mana = $mana;
        $this->description = $description;
        $this->position = $position;
    }

    public function hydrate(array $listeCartes) {
        foreach ($listeCartes as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
  
    //Getters
    public function getNom() {
        return $this->nom;
    }
    public function getMana() {
        return $this->mana;
    }
    public function getDegats() {
        return $this->degats;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPdv() {
        return $this->pdv;
    }
    public function getPosition() {
        return $this->position;
    }

    //Fonctionnalités de la carte
    public function perdrePdv($pdv) {
        $this->pdv = $this->pdv - $pdv;
    }

    public function gagnerPdv($pdv) {
        $this->pdv = $this->pdv + $pdv;
    }
   
    public function carteVersMain() {
        $this->position = 1;
    }

    public function carteVersBoard() {
       $this->position = 2;
    }

    public function carteVersDefausse() {
        $this->position = 3;
    }

}
