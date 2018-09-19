<?php
require_once 'creature.php';

class bouclier extends creature {
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