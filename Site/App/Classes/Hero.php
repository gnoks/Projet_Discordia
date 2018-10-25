<?php
namespace App\Classes;
/**
 * Hero class
 * Propriété du héros
 */
class Hero {
    private $id;
    private $nom;
    private $pdv;
    private $mana;
    private $description;


    public function __construct($id, $nom, $pdv, $mana, $description)
    {
        $this->id = $id; // Initialisation de l'id.
        $this->nom = $nom; // Initialisation du nom.
        $this->pdv = $pdv; // Initialisation des pdv.
        $this->mana = $mana; // Initialisation de la mana.
        $this->description = $description;
    }

    //Getters
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getPdv() {
        return $this->pdv;
    }
    public function getMana() {
        return $this->mana;
    }
    public function getDescription() {
        return $this->description;
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