<?php
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link rel="stylesheet" href="_asset/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription à la newsletter</title>
</head>

<body>
    <div class="meteors">
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
    </div>
    <div class="Userborder">
        <header>

            <h1>DISCORDIA</h1>

            <img id="logo" src="_asset/img/Phrase_accroche_vecto_RVB.png">

        </header>

        <a> Inscrivez-vous ! </a>

        <form name="form" id="suscribe" action="" method="POST" <?php if (isset($_POST[ 'sendMail'])) { echo mailSend($_POST[
            'sendMail']); } ?>>
            <input id="mail" type="text" name="sendMail" value="" placeholder="Saisissez votre adresse mail">
            <input id="button" type="submit" value="Valider">

        </form>

        <p>Il y a bien longtemps, le monde de Discordia était habité par différentes tribus nomades. Au fil des années, la plupart
            se sont sédentarisés.
            <br>Parmi elle, la tribu des Campos qui achoisi de vivre de façon plus prosaïque.
            <br>La tribu Astrologia a choisi de se tourner vers le culte de la divination en manipulant la magie astrale pour
            invoquer des créatures venuesdu ciel pour conquérir la tribu des Campos.
            <br>Durant des décennies, ces deux peuples s'affrontèrent jusqu'au jour où les chefs de ces deux clans décidèrent
            de mettre un terme à ces conflits incessant et choisirent d'opposer leurs deux meilleurs guerriers.
            <br>Depuis, tous les 5 ans, un tournoi a lieu pour choisir lequel des chefs de tribus gouvernera l'autre pour les
            temps à venir.</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-50 mx-auto" src="./_asset/cartes/42.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50 mx-auto" src="./_asset/cartes/958.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50 mx-auto" src="./_asset/cartes/images.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</body>

</html>