<?php
/**
 * Connection controller
 * Copyright :  Tous droits réservés.
 * Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
 * Version 0.1
 */
namespace App\Controllers;
use App\Models\UtilisateurModel;
class ConnectionController extends Controller{
    protected $layout = 'accueil';
    /**
    * Connection function 
    * Controle connection de l'utilisateur
    *
    * @return void
    */
    public function connection(){
        if (isset($_POST["pseudo"]) &&isset($_POST["password"]) ) {      
            if (!empty($_POST["pseudo"]) && !empty($_POST["password"])) {
                $userModel = new UtilisateurModel;
                $auth = $userModel->read($_POST);
                if ($auth !== false) {
                    if ( password_verify($_POST["password"], $auth->getmdp()) ) {
                        $msgValid = 'Bienvenue '. $auth->getprenom().'!';
                        $_SESSION['user'] = $auth;
                        $this->render( 'Accueil\index', \compact('msgValid') );
                    }else {
                        $msgErr = 'Mot de passe et/ou pseudo invalides';
                    }
    
                }else {
                    $msgErr = 'Mot de passe et/ou pseudo invalides';
                }
            }else {
                $msgErr = 'Merci de renseigner tous les champs!';
            }     
        }
        $this->render( 'Accueil\index', \compact('msgErr') );
    }
}