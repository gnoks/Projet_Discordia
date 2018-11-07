<?php
/**
* Inscription controller
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
namespace App\Controllers;
use App\Models\UtilisateurModel;
class InscriptionController extends Controller{
    protected $layout = 'accueil';

    public function inscrire() {
        /**
        * Affichage function
        * Controle puis inscription de l'utilisateur
        */
        if(isset($_POST["addUser"])){ 
            if (!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["pseudo"]) && !empty($_POST["password"])) {
                if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ 
                    if (strlen($_POST["password"]) > 7) {
                        $userModel = new UtilisateurModel;
                        $test = $userModel->searchFound($_POST);
                        if ($test === true){
                            $_POST["password"]=password_hash($_POST["password"], PASSWORD_BCRYPT);
                            if($userModel->create($_POST)) $msgValid = 'Inscription bien prise en compte'; else $msgErr = 'error !';
                            $this->render( 'Accueil\index', \compact('msgValid') );
                            exit();
                        }else {
                            
                            foreach ($test as $key => $value) {
                                if($_POST['pseudo'] === $value['pseudo']  ){
                                    $pseudo = true;
                                }if ($_POST['email'] === $value['email']) {
                                    $email = true;
                                }
                            }
                            if (isset($email) === true && isset($pseudo) !== true) {
                                $msgErr = "Email déjà utilisé";
                            }elseif (isset($email) !== true && isset($pseudo) === true) {
                                $msgErr = "Pseudo déjà utilisé";
                            }else{
                                $msgErr = "Pseudo et Email déjà utilisé";
                            }
                        }
                        
                    }else {
                        $msgErr = "Mot de passe doit contenir 8 caractères minimum !";
                    }  
        }else {
        $msgErr = 'Mail non valide !';
        }
            }
        }
        $this->render( 'Accueil\index', \compact('msgErr') );
    }
}
