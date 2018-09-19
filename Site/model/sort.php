<?php
require_once 'carte.php';

class sort extends carte {

    public function __construct($nom, $degats, $mana, $description, $type)
    {
        $this->nom = $nom; 
        $this->degats = $degats;
        $this->mana = $mana;
        $this->description = $description;
        $this->type = $type;
    }

    //Getters
    public function getPdv() {
        return $this->pdv;
    }
    

}