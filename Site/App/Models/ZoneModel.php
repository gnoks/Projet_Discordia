<?php
namespace App\Models;
use \PDO;
use \PDOExeption;
use \App\Classes\Creature;
use \App\Classes\Bouclier;
use \App\Classes\Sort;

class ZoneModel extends Model{
    

    public function generePioche(array $pioche, int $hero) {
        $liste = $this->getListCreature($pioche, $hero);
        $liste = $this->getListBouclier($liste, $hero);
        $liste = $this->getListSort($liste, $hero);
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

    public function getListCreature(array $pioche, int $hero)
    {
        $sql = 'SELECT `car_id` AS `id`,`car_nom` AS `nom`, `car_description` AS `description`, `car_degats` AS `degats`, `car_pdv` AS `pdv`, `car_mana` AS `mana` FROM carte JOIN avoir_habiliter ON avo_carte_fk = car_id JOIN habiliter ON 
        avo_habiliter_fk = hab_id WHERE `hab_id` = :typeInj';
        $q =$this->_db->prepare($sql);
        $values = array(
            "typeInj" => 1,
        );
        
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Creature($donnees['nom'], $donnees['description'], $donnees['degats'], $donnees['pdv'], $donnees['mana']);
            if(($req = $this->_db->prepare('INSERT INTO `carte_temp` (car_temp_degats, car_temp_pdv, car_temp_mana, com_temp_date,car_temp_carte_fk, car_temp_hero_temp_fk ) VALUE (?, ?, ?, ?, ?, ?) '))!==false) {
                if($req->bindValue(1, $donnees['degats']) && $req->bindValue(2, $donnees['pdv']) && $req->bindValue(3, $donnees['mana']) && $req->bindValue(4, date("Y-m-d H:i:s")) && $req->bindValue(5, $donnees['id']) && $req->bindValue(6, $hero)) {
                    if($req->execute()) {
                        $req->closeCursor();
                    }
                }
            }
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListBouclier(array $pioche, int $hero)
    {
        $sql = 'SELECT `car_id` AS `id`,`car_nom` AS `nom`, `car_description` AS `description`, `car_degats` AS `degats`, `car_pdv` AS `pdv`, `car_mana` AS `mana` FROM carte JOIN avoir_habiliter ON avo_carte_fk = car_id JOIN habiliter ON 
        avo_habiliter_fk = hab_id WHERE `hab_id` = :typeInj';
        $q = $this->_db->prepare($sql);
        $values = array(
            "typeInj" => 1,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Bouclier($donnees['nom'], $donnees['description'], $donnees['degats'], $donnees['pdv'], $donnees['mana']);
            if(($q = $this->_db->prepare('INSERT INTO `carte_temp` (car_temp_degats, car_temp_pdv, car_temp_mana, com_temp_date,car_temp_carte_fk, car_temp_hero_temp_fk ) VALUE (?, ?, ?, ?, ?, ?) '))!==false) {
                if($q->bindValue(1, $donnees['degats']) && $q->bindValue(2, $donnees['pdv']) && $q->bindValue(3, $donnees['mana']) && $q->bindValue(4, date("Y-m-d H:i:s")) && $q->bindValue(5, $donnees['id']) && $q->bindValue(6, $hero)) {
                    if($q->execute()) {
                        $q->closeCursor();
                    }
                }
            }
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }

    public function getListSort(array $pioche, int $hero)
    {
        $sql = 'SELECT `car_id` AS `id`,`car_nom` AS `nom`, `car_description` AS `description`, `car_degats` AS `degats`, `car_pdv` AS `pdv`, `car_mana` AS `mana` FROM carte JOIN avoir_habiliter ON avo_carte_fk = car_id JOIN habiliter ON 
        avo_habiliter_fk = hab_id WHERE `hab_id` = :typeInj';
        $q = $this->_db->prepare($sql);
        $values = array(
            "typeInj" => 2,
        );
        $q->execute($values);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $pioche[] = new Sort($donnees['nom'], $donnees['description'], $donnees['degats'], $donnees['pdv'], $donnees['mana']);
            if(($req = $this->_db->prepare('INSERT INTO `carte_temp` (car_temp_degats, car_temp_pdv, car_temp_mana, com_temp_date,car_temp_carte_fk, car_temp_hero_temp_fk ) VALUE (?, ?, ?, ?, ?, ?) '))!==false) {
                if($req->bindValue(1, $donnees['degats']) && $req->bindValue(2, $donnees['pdv']) && $req->bindValue(3, $donnees['mana']) && $req->bindValue(4, date("Y-m-d H:i:s")) && $req->bindValue(5, $donnees['id']) && $req->bindValue(6, $hero)) {
                    if($req->execute()) {
                        $req->closeCursor();
                    }
                }
            }   
        }
        if (empty($pioche)) {
                return false;
            } else { return $pioche; }
    }



}