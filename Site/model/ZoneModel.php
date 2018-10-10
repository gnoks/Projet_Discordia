<?php
class ZoneModel {
    private $pdo;

    public function __construct() {
        $this->pdo = Model::Init();
    }

    public function generePioche(array $pioche) {
        $liste = $this->getListCreature($pioche);
        $liste = $this->getListBouclier($liste);
        $liste = $this->getListSort($liste);
        return $liste;
    }
    
    public function getListCreature(array $pioche)
    {
        $sql = 'SELECT nom, degats, mana, description, pdv, type FROM cartes WHERE type = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 1,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Creature($donnees['nom'], $donnees['degats'], $donnees['mana'], $donnees['description'], $donnees['pdv'], $donnees['type']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListBouclier(array $pioche)
    {
        $sql = 'SELECT nom, degats, mana, description, pdv, type FROM cartes WHERE type = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 2,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Bouclier($donnees['nom'], $donnees['degats'], $donnees['mana'], $donnees['description'], $donnees['pdv'], $donnees['type']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListSort(array $pioche)
    {
        $sql = 'SELECT nom, degats, mana, description, pdv, type FROM cartes WHERE type = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 3,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Sort($donnees['nom'], $donnees['degats'], $donnees['mana'], $donnees['description'], $donnees['pdv'], $donnees['type']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }



}