<?php
namespace App\Models;
use \PDO;
use \PDOException;

class PartieModel {
    
    public function insertPartie(int $victoire, int $tour,int $dateCreation,int $datefin) {
        try {
        if(($req = Model::$pdo->prepare('INSERT INTO `partie` (`par_victoire`, `par_tour`, `par_dateCreation`, `par_dateFin`) VALUE (?, ?, ?, ?) '))!==false) {
            if($req->bindValue(1, $victoire) && $req->bindValue(2, $tour) && $req->bindValue(3, $dateCreation) && $req->bindValue(4, $datefin)) {
                if($req->execute()) {
                    $lastID = Model::$pdo->lastInsertId();
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