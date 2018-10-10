<?php
/**
* Inscription controller
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
class InscriptionController {
    use TtestDate;

    public function inscrire() {
        /**
        * Affichage function
        * Controle puis inscription de l'utilisateur
        */
        $date = date('Y-m-d');
        if(isset($_POST["addUser"])){ 
            if (!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["pseudo"]) && !empty($_POST["password"]) && !empty($_POST["date"])) {
                if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ 
                    $userDate = date('Y-m-d', strtotime($_POST["date"]));
                    if ($this->is_valid_date($userDate, 'Y-m-d')) {
                        $interval = date_diff(date_create($userDate), date_create($date));
                        $jour = $interval->format('%a');
                        $yearsUser = explode("-",$_POST["date"]);
                        $yearsSystem = explode("-",$date);
                        if(intval($yearsUser[0]) < intval($yearsSystem[0]) && $jour >= 5110){
                            if (strlen($_POST["password"]) > 7) {
                                $userModel = new UserModel;
                                $test = $userModel->searchFound($_POST);
                                if ($test === true){
                                    if($userModel->create($_POST)) $msgValid = 'Inscription bien prise en compte'; else $msgErr = 'error !';
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
                            $msgErr = "Vous devez avoir plus de 14 ans pour vous inscrire.";
                        }
                    }else {
                        $msgErr = "Date non valide !";
                    }
                }else {
                $msgErr = 'Mail non valide !';
                }
            }
        }
        ob_start();
        require_once('views/inscriptionView.php');
        $content = ob_get_clean();
        $title = 'Inscription';
        require_once('views/template.php');
    }
}
