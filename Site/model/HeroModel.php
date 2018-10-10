<?php

class HeroModel {

    public function update(int $id): int {
        try {
        if(($req = Model::$pdo->prepare('UPDATE `character_copy` SET `damages`=? WHERE `depend`=? AND `player`=?'))!==false) {
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