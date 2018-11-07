<?php
namespace App\Controllers;

/**
* Accueil controller
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
class AccueilController extends Controller {
    
        protected $layout = 'accueil';
    /**
     * Affichage function
     * Affichage page d'accueil.
     *
     * @return void
     */
    public function index(){
            $content = ob_get_clean();
            $title = 'Connection';
            $this->render('accueil/index', compact($title));
    }
    public function unset(){
            unset($_SESSION['user']);
            $content = ob_get_clean();
            $title = 'Connection';
            $this->render('accueil/index', compact($title));
    }
}