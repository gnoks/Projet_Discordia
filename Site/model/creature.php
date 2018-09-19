<?php
require_once 'carte.php';

class creature extends carte {
    protected $pdv;

    public function __construct($nom, $degats, $mana, $description, $pdv, $type)
    {
        $this->nom = $nom; 
        $this->degats = $degats;
        $this->mana = $mana;
        $this->description = $description;
        $this->pdv = $pdv;
        $this->type = $type;
    }

    //Getters
    public function getPdv() {
        return $this->pdv;
    }
    

}