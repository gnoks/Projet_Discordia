<?php

/**
 * Heros class
 * Propriété du héros
 */
class Heros {
    protected $nom;
    protected $pdv;
    protected $mana;

    public function __construct($nom)
    {
        $this->nom = $nom; // Initialisation du nom.
        $this->pdv = 20; // Initialisation des pdv à 20.
        $this->mana = 0; // Initialisation de la mana à 0.
    }

    //Getters
    public function getNom() {
        return $this->nom;
    }
    public function getPdv() {
        return $this->pdv;
    }
    public function getMana() {
        return $this->mana;
    }
    

    public function depenserMana($mana){
        $this->mana = $this->mana - $mana;
    }

    public function augmenterMana(){
        $this->mana = $this->mana + 1;
    }

    public function augmenterPdv($pdv){
        $this->pdv = $this->pdv + $pdv;
    }

    public function perdrePdv($pdv){
        $this->pdv = $this->pdv - $pdv;
    }
}