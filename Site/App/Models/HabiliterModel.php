<?php 
namespace App\Models;
use \PDO;
class HabiliterModel extends Model {

    public function __construct() {
        self::init();
    }


    public function read($id = null){
        try {
            if($id === null){
                if(($req = Model::$pdo->query('SELECT * FROM `habiliter`'))!==false) {
                    return $req->fetchAll(PDO::FETCH_ASSOC);
                }
            } else {
                if(($req = Model::$pdo->prepare('SELECT * FROM `habiliter` WHERE `hab_id`=?'))!==false) {
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

    public function readHabiliterByCard($id){
        try {
            if(($req = Model::$pdo->prepare('SELECT `avo_habiliter_fk` as `id` FROM `avoir_habiliter` WHERE `avo_carte_fk`=?'))!==false) {
                if($req->bindValue(1, $id)) {
                    if($req->execute()) {
                        $data = $req->fetch(PDO::FETCH_ASSOC);
                        return $this->read($data['id']);
                    }
                }
            }
            return false;
        } catch(PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

}
