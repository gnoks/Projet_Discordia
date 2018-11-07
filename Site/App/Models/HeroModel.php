<?php
namespace App\Models;
use \PDO;
use \PDOException;
use \Exception;
use \App\Classes\Hero;

class HeroModel extends Model{
    
    public function getHero(int $id): Hero {
        try {
        if(($req = $this->_db->prepare('SELECT `her_id`, `her_nom`, `her_description`, `her_pdv`, `her_mana` FROM hero WHERE `her_id` = ?'))!==false) {
            if($req->bindValue(1, $id)) {
                if($req->execute()) {
                    $datas = $req->fetch(PDO::FETCH_ASSOC);
                    return new Hero($datas['her_id'],$datas['her_nom'],$datas['her_pdv'],$datas['her_mana'], $datas['her_description']);
                  }
            }
        }
        return false;
        } catch(PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function insertHeroTemp(int $pdv, int $mana, int $partie, int $utilisateur, int $hero) {
        try {
        if(($req = $this->_db->prepare('INSERT INTO `hero_temp` (her_temp_pdv, her_temp_mana, her_partie_fk, her_utilisateur_fk, her_hero_fk) VALUE (?, ?, ?, ?, ?) '))!==false) {
            if($req->bindValue(1, $pdv) && $req->bindValue(2, $mana) && $req->bindValue(3, $partie) && $req->bindValue(4, $utilisateur) && $req->bindValue(5, $hero)) {
                if($req->execute()) {
                    $lastId = $this->_db->lastInsertId();
                    $req->closeCursor();
                    return $lastId;
                }
            }
        }
        return false;
        } catch(PDOException $e) {
        throw new Exception('Erreur BDD', 14, $e);
        }
    }

    public function getHeroTemp(int $id): int {
        try {
        if(($req = $this->_db->prepare('SELECT `her_temp_pdv`, `her_temp_mana`, `her_partie_fk`, `her_utilisateur_fk`, `her_hero_fk` JOIN  FROM hero_temp WHERE `her_id` = ?'))!==false) {
            if($req->bindValue(1, $id)) {
                if($req->execute()) {
                    $datas = $req->fetch(PDO::FETCH_ASSOC);
                    return new Hero($datas['her_temp_pdv'],$datas['her_temp_mana'],$datas['her_partie_fk'],$datas['her_utilisateur_fk']);
                  }
            }
        }
        return false;
        } catch(PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function update(int $id): int {
        try {
        if(($req = $this->_db->prepare('UPDATE `character_copy` VALUE `damages`=? WHERE `depend`=? AND `player`=?'))!==false) {
            if($req->bindValue(1, $id)) {
            if($req->execute()) {
                $req->closeCursor();
            }
            }
        }

        return false;
        } catch(PDOException $e) {
        throw new Exception('Can not update in the database', 14, $e);
        }
    }

}