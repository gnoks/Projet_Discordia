<?php
/**
* CRUD User
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
class UserModel extends CoreModel{
  
    public function create(array $user) {
        try {
          if(($this->req = $this->db->prepare('INSERT INTO `utilisateur`(`uti_pseudo`, `uti_mdp`, `uti_nom`, `uti_prenom`, `uti_email`, `uti_dateInscription`,`uti_rank`,`uti_role`) VALUES (:pseudo, :mdp, :nom, :prenom, :email, NOW(), 0 , 2)'))!==false) {
            if(
              $this->req->bindValue('pseudo', $user['pseudo'])
              && $this->req->bindValue('mdp', $user['password'])
              && $this->req->bindValue('nom', $user['nom'])
              && $this->req->bindValue('prenom', $user['prenom'])
              && $this->req->bindValue('email', $user['email'])
            ) {
              if($this->req->execute()) {
                $id = $this->db->lastInsertId();
                $this->req->closeCursor();
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
          if(($this->req=$this->db->prepare('SELECT `uti_pseudo` AS pseudo, `uti_email` AS email  FROM `utilisateur` WHERE `uti_pseudo`=:pseudo OR `uti_email`=:mail ')) !== false){
            if(
              $this->req->bindValue('pseudo', $user['pseudo'],PDO::PARAM_STR)
              && $this->req->bindValue('mail', $user['email'],PDO::PARAM_STR)
            ) {
                if($this->req->execute()){
                  while(($data = $this->req->fetch(PDO::FETCH_ASSOC)) !== false){
                    $datas[] = $data;
                  }
                  $this->req->closeCursor();
                  return isset($datas) ? $datas : true;
              }
              
              }
              
            }
            $this->req->closeCursor();
            return false;
        }catch(PDOException $e){
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }

      public function read(array $user){
        try{
          if(($this->req=$this->db->prepare('SELECT * FROM `utilisateur` WHERE `uti_pseudo`=:pseudo OR `uti_email`=:mail')) !== false){
            if(
              $this->req->bindValue('pseudo', $user['pseudo'],PDO::PARAM_STR)
              && $this->req->bindValue('mail', $user['pseudo'],PDO::PARAM_STR)
            ) {
                if($this->req->execute()){
                  $data=array();
                  while(($data = $this->req->fetch(PDO::FETCH_ASSOC)) !== false){
                    $datas = new User($data);
                  }
                  $this->req->closeCursor();
                  return isset($datas) ? $datas : false;
              }
              
              }
              
            }
            $this->req->closeCursor();
            return false;
        }catch(PDOException $e){
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }
}