<?php
$stockageMail = 'mailLib.txt';
$octet=filesize('mailLib.txt');


if (isset($_POST['sendMail']) && $_POST['sendMail'] !=''){
    if (filter_var($_POST['sendMail'], FILTER_VALIDATE_EMAIL)) {
        $ressourceFichier = fopen( $stockageMail, 'a' );
        if($octet > 0){
            //$tabMail = file($stockageMail);
           foreach(file($stockageMail) as $v){
               $tabMail[] = rtrim($v);
               //var_dump($tabMail);
           }
            if(in_array($_POST['sendMail'] , $tabMail )== false){
                fwrite( $ressourceFichier, "\r\n".htmlentities($_POST['sendMail']));
                
              
            }
                    
        }else {
            fwrite( $ressourceFichier, htmlentities($_POST['sendMail']));
            
            
        }
        fclose( $ressourceFichier);
    } else {
        echo 'Adresse mail non valide (\'test@example.com\')';
    }
      
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription à la newsletter</title>
        <style>
        /*reset*/
        *{
            box-sizing : border-box;
            outline : none;
        }
        @font-face {
            font-family: 'KGInimitableOriginal';
            src: url('./_asset/Font/KGInimitableOriginal.ttf');

        }
        @font-face {

            font-family: 'Catamaran';
            src: url('./_asset/Font/Catamaran-Regular.ttf');
        }

        p{
            font-family: 'Catamaran', sans-serif;
            text-align: justify;
        }
        
        h1{
            font-family: 'KGInimitableOriginal', sans-serif ;
            color: white;
            text-align: center;
            letter-spacing: 8px;
            font-size: 2em;
        }

        #logo{
            width: 40% ;
        }
       
        body{
            height: 100vh;
            width: 100%;
            /* background-image: url("./_asset/img/370850358dcf3349ac13f7d6d58c924d.jpg"); */
            background-color: #6CC4D5;
            margin : 20px auto;
            color: white;
        }

        .container{
            margin: 0 auto;
            width: 35%;
            min-width: 325px;
            text-align: center;
        }

        #mail{
            width: 60%;
            min-width: 194px;
            line-height: 40px;
            float: left;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-bottomleft: 5px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-style: none;
            text-align: center;
        }
        

button {
    line-height: 1px;
    height: 42px;
    background: none;
    border: 0;
    box-sizing: border-box;
    margin: 1em;
    padding: 1em 2em;
    box-shadow: inset 0 0 0 2px #6c10d6;
    color: #6c10d6;
    font-size: inherit;
    font-weight: 700;
    position: absolute;
    vertical-align: middle;
    right: 495px;
    top: 463px;
}
button::before, button::after {
    box-sizing: inherit;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
}

.draw {
    transition: color 0.25s;
}
.draw::before, .draw::after {
    border: 2px solid transparent;
    width: 0;
    height: 0;
}
.draw::before {
    top: 0;
    left: 0;
}
.draw::after {
    bottom: 0;
    right: 0;
}
.draw:hover {
    color: #FFD919;
}
.draw:hover::before, .draw:hover::after {
    width: 100%;
    height: 100%;
}
.draw:hover::before {
    border-top-color: #FFD919;
    border-right-color: #FFD919;
    transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
}
.draw:hover::after {
    border-bottom-color: #FFD919;
    border-left-color: #FFD919;
    transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
}
        
        
        </style>
    </head>

    <header>
        <h1 class="container">DISCORDIA</h1>
        <div class="container">
        <img id="logo" src="_asset/img/Phrase_accroche_vecto_RVB.png">
    </div>
    </header>
    <body>
    <div class="container" id="containerStory"> 
                <p>Il y a bien longtemps, le monde de Discordia était habité par différentes tribus nomades. 
                Au fil des années, la plupart se sont sédentarisés.<br>Parmi elle, la tribu des Campos qui 
                achoisi de vivre de façon plus prosaïque.<br>La tribu Astrologia a choisi de se tourner vers 
                le culte de la divination en manipulant la magie astrale pour invoquer des créatures venuesdu 
                ciel pour conquérir la tribu des Campos.<br>Durant des décennies, ces deux peuples s'affrontèrent 
                jusqu'au jour où les chefs de ces deux clans décidèrent de mettre un terme à ces conflits incessant 
                et choisirent d'opposer leurs deux meilleurs guerriers.<br>Depuis, tous les 5 ans, un tournoi a lieu 
                pour choisir lequel des chefs de tribus gouvernera l'autre pour les temps à venir.</p>
    </div>  
    <div class="container" id="containerForm">
            <p class="container">Inscrivez-vous !</p>
    <section class="buttons">  
    <form action="" method= "POST">
        <input id="mail" type="text" name="sendMail" value="" placeholder="Saisissez votre adresse mail"> 
        <button class="draw" type="submit">Valider</button>
        
    </form>
    </div>
    
    </body>
</html>



