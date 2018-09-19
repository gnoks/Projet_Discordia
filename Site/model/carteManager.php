<?php
require_once 'model.php';
require_once 'creature.php';
require_once 'bouclier.php';
require_once 'sort.php';
class carteManager {

    public function generePioche(array $pioche) {
        $liste = $this->getListCreature($pioche);
        $liste = $this->getListBouclier($liste);
        $liste = $this->getListSort($liste);
        return $liste;
    }

    public function getListCreature(array $pioche)
    {
        Model::Init();
        $sql = 'SELECT nom, degats, mana, description, pdv, type FROM cartes WHERE type = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 1,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new creature($donnees['nom'], $donnees['degats'], $donnees['mana'], $donnees['description'], $donnees['pdv'], $donnees['type']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListBouclier(array $pioche)
    {
        Model::Init();
        $sql = 'SELECT nom, degats, mana, description, pdv, type FROM cartes WHERE type = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 2,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new bouclier($donnees['nom'], $donnees['degats'], $donnees['mana'], $donnees['description'], $donnees['pdv'], $donnees['type']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListSort(array $pioche)
    {
        Model::Init();
        $sql = 'SELECT nom, degats, mana, description, pdv, type FROM cartes WHERE type = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 3,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new sort($donnees['nom'], $donnees['degats'], $donnees['mana'], $donnees['description'], $donnees['pdv'], $donnees['type']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }



}