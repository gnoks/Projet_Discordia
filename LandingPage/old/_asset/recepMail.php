<?php
function mailSend($mail){
    $stockageMail = 'mailLib.txt'; // Fichier ou les mails sont stockés
    $octet=filesize('mailLib.txt'); // Contrôle taille mailLib.txt
    if (isset($mail) && $mail !=''){ // Si le post existe et différent de NULL
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) { // Contrôle validité mail (Format)
            $ressourceFichier = fopen( $stockageMail, 'a' ); // Ouverture fichier avec droit écriture "a" http://php.net/manual/fr/function.fopen.php
            if($octet > 0){ // On contrôle si le fichier est vide
                    foreach(file($stockageMail) as $v){ //
                        $tabMail[] = rtrim($v); // Retourne chaine caractère après suppression des blancs
                    }
                        if(in_array($mail , $tabMail )== false){ // Si le post n'est pas dans le tableau alors on le stocke
                            fwrite( $ressourceFichier, "\r\n".htmlentities($mail));
                            return 'data-email="Inscription bien prise en compte"';               
                        }
                        else{
                            return 'data-email="Inscription bien prise en compte"';  
                        }
            
            }else {
                fwrite( $ressourceFichier, htmlentities($mail)); // Si le tableau est vide et que le mail est valide alors on stocke
                return 'data-email="Inscription bien prise en compte"';
            }
            fclose( $ressourceFichier);
        } else {
            return 'data-email="Veuillez saisir une adresse mail valide (' . $mail . ')"'; // Format du mail non valide
        }
    }

}
