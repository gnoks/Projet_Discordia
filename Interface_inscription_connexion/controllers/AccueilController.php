<?php

/**
* Accueil controller
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
class AccueilController {
    
    /**
     * Affichage function
     * Affichage page d'accueil.
     *
     * @return void
     */
    public function affichage(){
            ob_start();
            require_once('views/accueilView.php');
            $content = ob_get_clean();
            $title = 'Connection';
            require_once('views/template.php');
    }
}