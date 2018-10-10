<?php
/**
 * Connection controller
 * Copyright :  Tous droits réservés.
 * Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
 * Version 0.1
 */
class ConnectionController {
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
                $test = $userModel->identification($_POST);
                var_dump($test);
                if ($test !== false) {
                    $msgValid = 'Bienvenue!'; 
                }else {
                    $msgErr = 'Mot de passe et/ou pseudo invalides';
                }

            }else {
                $msgErr = 'Merci de renseigner tous les champ...ignons!';
            }     
        }
            ob_start();
            require_once('views/connexionView.php');
            $content = ob_get_clean();
            $title = 'Connection';
            require_once('views/template.php');
    }
}