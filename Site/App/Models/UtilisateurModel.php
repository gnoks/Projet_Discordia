<?php
/**
* CRUD User
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/

namespace App\Models;
use \PDO;
// use \PDOException;
use \App\Classes\Utilisateur;
class UtilisateurModel extends Model{
  
    public function create(array $user) {
        try {
          if(($req = $this->_db->prepare('INSERT INTO `utilisateur`(`uti_pseudo`, `uti_mdp`, `uti_nom`, `uti_prenom`, `uti_email`, `uti_dateInscription`,`uti_rank`,`uti_role`) VALUES (:pseudo, :mdp, :nom, :prenom, :email, NOW(), 0 , 2)'))!==false) {
            if(
              $req->bindValue('pseudo', $user['pseudo'])
              && $req->bindValue('mdp', $user['password'])
              && $req->bindValue('nom', $user['nom'])
              && $req->bindValue('prenom', $user['prenom'])
              && $req->bindValue('email', $user['email'])
            ) {
              if($req->execute()) {
                $id = $this->_db->lastInsertId();
                $req->closeCursor();
                return $id;
              }
            }
          }
    
          return false;
        } catch(PDOException $e) {
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }  
      public function searchFound(array $user){
        try{
          if(($req=$this->_db->prepare('SELECT `uti_pseudo` AS pseudo, `uti_email` AS email  FROM `utilisateur` WHERE `uti_pseudo`=:pseudo OR `uti_email`=:mail ')) !== false){
            if(
              $req->bindValue('pseudo', $user['pseudo'],PDO::PARAM_STR)
              && $req->bindValue('mail', $user['email'],PDO::PARAM_STR)
            ) {
                if($req->execute()){
                  while(($data = $req->fetch(PDO::FETCH_ASSOC)) !== false){
                    $datas[] = $data;
                  }
                  $req->closeCursor();
                  return isset($datas) ? $datas : true;
              }
              
              }
              
            }
            $req->closeCursor();
            return false;
        }catch(PDOException $e){
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }

      public function read(array $user){
        try{
          if(($req=$this->_db->prepare('SELECT * FROM `utilisateur` WHERE `uti_pseudo`=:pseudo OR `uti_email`=:mail')) !== false){
            if(
              $req->bindValue('pseudo', $user['pseudo'],PDO::PARAM_STR)
              && $req->bindValue('mail', $user['pseudo'],PDO::PARAM_STR)
            ) {
                if($req->execute()){
                  $data=array();
                  while(($data = $req->fetch(PDO::FETCH_ASSOC)) !== false){
                    $datas = new Utilisateur($data);
                  }
                  $req->closeCursor();
                  return isset($datas) ? $datas : false;
              }
              
              }
              
            }
            $req->closeCursor();
            return false;
        }catch(PDOException $e){
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }
}