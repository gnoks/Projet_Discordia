<?php
/**
* Recovery controller
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
namespace App\Controllers;
use App\Models\UtilisateurModel;
class RecoveryController extends Controller{
    protected $layout = 'accueil';
    
    /**
     * Affichage function recovery
     * Fonction de récupération de password.
     *
     * @return void
     */
    public function recovery(){
        if (!empty($_POST['email'])) {
            $_POST['pseudo'] = null;
            $recovery = new UtilisateurModel;
            $datas = $recovery->searchFound($_POST);
            if($datas === true){
                $msgErr = 'Compte introuvable';
            }else {
                $msgValid ='Un email vous a été envoyé'; 
            }
        }
        
        $this->render( 'Accueil\index', \compact('msgValid') );
    }
}