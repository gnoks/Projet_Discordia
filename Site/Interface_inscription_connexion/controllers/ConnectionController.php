<?php
/**
 * Connection controller
 * Copyright :  Tous droits réservés.
 * Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
 * Version 0.1
 */
class ConnectionController{
    /**
    * Connection function 
    * Controle connection de l'utilisateur
    *
    * @return void
    */
    public function connection(){
        if (isset($_POST["pseudo"]) &&isset($_POST["password"]) ) {      
            if (!empty($_POST["pseudo"]) && !empty($_POST["password"])) {
                $userModel = new UserModel;
                $auth = $userModel->read($_POST);
                if ($auth !== false) {
                    if ( password_verify($_POST["password"], $auth->get_mdp()) ) {
                        $msgValid = 'Bienvenue '. $auth->get_prenom().'!';
                        $_SESSION['user'] = $auth;
                        ob_start();
                        require_once('views/accueilView.php');
                        $content = ob_get_clean();
                        $title = 'Connection';
                        require_once('views/template.php');
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
            ob_start();
            require_once('views/accueilView.php');
            $content = ob_get_clean();
            $title = 'Connection';
            require_once('views/template.php');
    }
}