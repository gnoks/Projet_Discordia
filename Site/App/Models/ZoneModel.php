<?php
namespace App\Models;
use \PDO;
use \PDOExeption;
use \App\Classes\Creature;
use \App\Classes\Bouclier;
use \App\Classes\Sort;
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
    
    // public function getList(array $pioche)
    // {
    //     $sql = 'SELECT `car_nom` AS `nom`, `car_description` AS `description`, `car_degats` AS `degats`, `car_pdv` AS `pdv`, `car_mana` AS `mana`, `car_type` AS `type` FROM carte WHERE `car_type` = :typeInj';
    //     $q = Model::$pdo->prepare($sql);
    //     $values = array(
    //         "typeInj" => 3,
    //     );
    //     $q->execute($values);
    //     while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    //     {
    //         $pioche[] = new Creature($donnees['nom'], $donnees['degats'], $donnees['mana'], $donnees['description'], $donnees['pdv'], $donnees['type']);
    //     }
    //     if (empty($pioche)) {
    //             return false;
    //         } else { return $pioche; }
    // }

    public function getListCreature(array $pioche)
    {
        $sql = 'SELECT `car_nom` AS `nom`, `car_description` AS `description`, `car_degats` AS `degats`, `car_pdv` AS `pdv`, `car_mana` AS `mana` FROM carte JOIN avoir_habiliter ON avo_carte_fk = car_id JOIN habiliter ON 
        avo_habiliter_fk = hab_id WHERE `hab_id` = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 1,
        );
        
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Creature($donnees['nom'], $donnees['description'], $donnees['degats'], $donnees['pdv'], $donnees['mana']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListBouclier(array $pioche)
    {
        $sql = 'SELECT `car_nom` AS `nom`, `car_description` AS `description`, `car_degats` AS `degats`, `car_pdv` AS `pdv`, `car_mana` AS `mana` FROM carte JOIN avoir_habiliter ON avo_carte_fk = car_id JOIN habiliter ON 
        avo_habiliter_fk = hab_id WHERE `hab_id` = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 1,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Bouclier($donnees['nom'], $donnees['description'], $donnees['degats'], $donnees['pdv'], $donnees['mana']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListSort(array $pioche)
    {
        $sql = 'SELECT `car_nom` AS `nom`, `car_description` AS `description`, `car_degats` AS `degats`, `car_pdv` AS `pdv`, `car_mana` AS `mana` FROM carte JOIN avoir_habiliter ON avo_carte_fk = car_id JOIN habiliter ON 
        avo_habiliter_fk = hab_id WHERE `hab_id` = :typeInj';
        $q = Model::$pdo->prepare($sql);
        $values = array(
            "typeInj" => 2,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Sort($donnees['nom'], $donnees['description'], $donnees['degats'], $donnees['pdv'], $donnees['mana']);
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }



}