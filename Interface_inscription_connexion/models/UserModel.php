<?php
/**
* CRUD User
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
class UserModel{
    private $db;
    private $req;
  
  
    public function __construct() {
      try {
        $this->db = new PDO('mysql:host=localhost;dbname=discordia;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      } catch(PDOException $e) {
        throw new Exception($e->getMessage(), $e->getCode(), $e);
      }
    }
  
    public function __destruct() {
      if(!empty($this->req)) {
        $this->req->closeCursor();
      }
    }


    public function create(array $user) {
        try {
          if(($this->req = $this->db->prepare('INSERT INTO `utilisateur`(`uti_pseudo`, `uti_mdp`, `uti_nom`, `uti_prenom`, `uti_email`,`uti_dateNaissance`, `uti_dateInscription`,`uti_rank`,`uti_role`) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :dateNaissance, NOW(), 0 , 2)'))!==false) {
            if(
              $this->req->bindValue('pseudo', $user['pseudo'])
              && $this->req->bindValue('mdp', $user['password'])
              && $this->req->bindValue('nom', $user['nom'])
              && $this->req->bindValue('prenom', $user['prenom'])
              && $this->req->bindValue('email', $user['email'])
              && $this->req->bindValue('dateNaissance', $user['date'])
            ) {
              if($this->req->execute()) {
                $id = $this->db->lastInsertId();
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
                  return isset($datas) ? $datas : true;
              }
              
              }
              
            }
            return false;
        }catch(PDOException $e){
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }

      public function identification(array $user){
        try{
          if(($this->req=$this->db->prepare('SELECT `uti_id` AS id, `uti_nom` AS nom, `uti_prenom` AS prenom, `uti_pseudo` AS pseudo FROM `utilisateur` WHERE `uti_pseudo`=:pseudo AND `uti_mdp`=:mdp OR `uti_email`=:mail AND `uti_mdp`=:mdp')) !== false){
            if(
              $this->req->bindValue('pseudo', $user['pseudo'],PDO::PARAM_STR)
              && $this->req->bindValue('mail', $user['pseudo'],PDO::PARAM_STR)
              && $this->req->bindValue('mdp', $user['password'],PDO::PARAM_STR)
            ) {
                if($this->req->execute()){
                  $data=array();
                  while(($data = $this->req->fetch(PDO::FETCH_ASSOC)) !== false){
                    $datas = new User($data);
                  }
                  return isset($datas) ? $datas : false;
              }
              
              }
              
            }
            return false;
        }catch(PDOException $e){
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }
}