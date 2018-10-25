<?php
namespace App\Models;
use \PDO;
class CarteModel {

    public function __construct() {
        $this->pdo = Model::Init();
    }

    public function create(array $datas) {
        try {
            if(($req = Model::$pdo->prepare('INSERT INTO `carte`(`car_nom`, `car_description`, `car_degats`, `car_pdv`, `car_mana`, `car_image`) VALUE (:nom, :description, :degats, :pdv, :mana, :image)'))!==false) {
                if($req->bindValue('nom', $datas['nom'])
                && $req->bindValue('description', $datas['description'])
                && $req->bindValue('degats', $datas['degats'])
                && $req->bindValue('pdv', $datas['pdv'])
                && $req->bindValue('mana', $datas['mana'])
                && $req->bindValue('image', $datas['image'])) {
                    if($req->execute()) {
                        $id = Model::$pdo->lastInsertId();
                        if(($req = Model::$pdo->prepare('INSERT INTO `avoir_habiliter`(`avo_habiliter_fk`, `avo_carte_fk`) VALUE (:habiliter, '.$id.')'))!==false){
                            if($req->bindValue('habiliter', $datas['habiliter'])){
                                if($req->execute()){

                                }  
                            }
                        }
                      }
                }
            }
            return false;
            } catch(PDOException $e) {
                throw new Exception($e->getMessage(), $e->getCode(), $e);
            }
    }
    
    public function update(array $datas, $id) {
        try {
            if(($req = Model::$pdo->prepare('UPDATE `carte` SET `car_nom` = :nom, `car_description` =:description, `car_degats`=:degats, `car_pdv`=:pdv, `car_mana`=:mana WHERE `car_id` = :id'))!==false) {
                if($req->bindValue('nom', $datas['nom'])
                && $req->bindValue('description', $datas['description'])
                && $req->bindValue('degats', $datas['degats'])
                && $req->bindValue('pdv', $datas['pdv'])
                && $req->bindValue('mana', $datas['mana'])
                && $req->bindValue('id', $id)) {
                    if($req->execute()) {
                        if(($req = Model::$pdo->prepare('UPDATE `avoir_habiliter` SET `avo_habiliter_fk`=:habiliter WHERE avo_carte_fk =:id'))!==false){
                            if($req->bindValue('habiliter', $datas['habiliter'])
                            && $req->bindValue('id', $id)){
                                if($req->execute()){

                                }  
                            }
                        }
                      }
                }
            }
            return false;
            } catch(PDOException $e) {
                throw new Exception($e->getMessage(), $e->getCode(), $e);
            }
    }
    public function read($id = null){
        try {
            if($id === null){
                if(($req = Model::$pdo->query('SELECT * FROM `carte`'))!==false) {
                    return $req->fetchAll(PDO::FETCH_ASSOC);
                }
            } else {
                if(($req = Model::$pdo->prepare('SELECT * FROM `carte` WHERE car_id=?'))!==false) {
                    if($req->bindValue(1, $id)) {
                        if($req->execute()) {
                            return $req->fetch(PDO::FETCH_ASSOC);
                        }
                    }
                }
            }
            
            return false;
            } catch(PDOException $e) {
                throw new Exception($e->getMessage(), $e->getCode(), $e);
            }
    }

}