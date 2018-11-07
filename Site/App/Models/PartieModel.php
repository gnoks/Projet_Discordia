<?php
namespace App\Models;
use \PDO;
use \PDOException;

class PartieModel extends Model{
    
    public function insertPartie(int $victoire, int $tour,int $dateCreation,int $datefin) {
        try {
        if(($req = $this->_db->prepare('INSERT INTO `partie` (`par_victoire`, `par_tour`, `par_dateCreation`, `par_dateFin`) VALUE (?, ?, ?, ?) '))!==false) {
            if($req->bindValue(1, $victoire) && $req->bindValue(2, $tour) && $req->bindValue(3, $dateCreation) && $req->bindValue(4, $datefin)) {
                if($req->execute()) {
                    $lastID = $this->_db->lastInsertId();
                    $req->closeCursor();
                    return new \App\Classes\Partie($lastID ,$victoire ,$tour, 0);
                }
            }
        }

        return false;
        } catch(PDOException $e) {
        throw new Exception('Erreur BDD', 14, $e);
        }
    }

}