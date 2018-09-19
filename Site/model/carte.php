<?php

/**
 * Carte class
 * Priopriété d'une carte
 */
class Carte {
    protected $nom;
    protected $mana;
    protected $degats;
    protected $description;
    protected $type;

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
        return $this->_nom;
    }
    public function getMana() {
        return $this->_mana;
    }
    public function getDegats() {
        return $this->_degats;
    }
    public function getDescription() {
        return $this->_description;
    }
    public function getType() {
        return $this->_Type;
    }

    //Fonctionnalités de la carte
    public function perdrePdv($pdv) {
        $this->_pdv = $this->_pdv - $pdv;
    }

    public function gagnerPdv($pdv) {
        $this->_pdv = $this->_pdv + $pdv;
    }
   

}
