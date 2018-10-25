<?php
/**
* Recovery controller
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
class RecoveryController{
    
    /**
     * Affichage function recovery
     * Fonction de récupération de password.
     *
     * @return void
     */
    public function recovery(){
        if (!empty($_POST['email'])) {
            $_POST['pseudo'] = null;
            $recovery = new UserModel;
            $datas = $recovery->searchFound($_POST);
            if($datas === true){
                $msgErr = 'Compte introuvable';
            }else {
                $msgValid ='Un email vous a été envoyé'; 
            }
        }
        ob_start();
        require_once('views/recoveryView.php');
        $content = ob_get_clean();
        $title = 'Connection';
        require_once('views/template.php');
    }
}