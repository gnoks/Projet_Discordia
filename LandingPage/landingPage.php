
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discordia | Inscription</title>
    <link rel="stylesheet" href="assets/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    <div class="headerBkg" id="header">
        <div class="flow">
            <img class="nuage0" src="assets/img/nuage_1.png" alt="">
            <img class="nuage" src="assets/img/nuage_1.png" alt="">
            <img class="nuage1" src="assets/img/nuage_2.png" alt="">
            <img class="nuage2" src="assets/img/nuage_3.png" alt="">
            <img class="nuage3" src="assets/img/nuage_1.png" alt="">
            <img class="nuage4" src="assets/img/nuage_2.png" alt="">
            <img class="nuage5" src="assets/img/nuage_3.png" alt="">
            <div class="centrage">
                <header>
                    <div class="logo">
                        <img src="assets/img/Logo_final_vecto_RVB.png" alt="logo discordia">
                    </div>
                    <h1>LE nouveau jeu de cartes à colLecTionner</h1>
                    <h2>Jeu graTuiT online et Jeu de plaTeau</h2>
                    <p>(Pour 2 x plus de plaisirs eT de fun)</p>
                    <div class="navigation">
                        <aside>PssT par là !</aside>
                        <a class="scroller js-scrollTo" href="#main"></a>
                    </div>
                </header>
            </div>
        </div>
    </div>
    <div class="mainBkg" id="main">
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="100%" height="800px" viewBox="0 0 800 800" enable-background="new 0 0 41.882 41.883" xml:space="preserve">
            <defs>
                <g id="star">
                <path fill="#FBF5FA" d="M41.882,22.684c-21.045-1.75-20.932-1.847-22.684,19.199C20.95,20.837,21.046,20.95,0,19.199
                C21.046,20.95,20.933,21.045,22.684,0C20.933,21.045,20.837,20.933,41.882,22.684"/>
                </g>
            </defs>
                <use xlink:href="#star" class="star star1" x="-400" y="500"></use>
                <use xlink:href="#star" class="star star2" x="0" y="350"></use>
                <use xlink:href="#star" class="star star3" x="1200" y="400"></use> 
                <use xlink:href="#star" class="star star4" x="800" y="50"></use> 
                <use xlink:href="#star" class="star star5" x="200" y="100"></use> 
                <use xlink:href="#star" class="star star6" x="900" y="300"></use> 
                <use xlink:href="#star" class="star star7" x="1000" y="400"></use> 
                <use xlink:href="#star" class="star star8" x="1100" y="200"></use> 
                <use xlink:href="#star" class="star star9" x="-150" y="0"></use> 
                <use xlink:href="#star" class="star star10" x="-250" y="200"></use>
                <use xlink:href="#star" class="star star11" x="200" y="300"></use>
        </svg>
        <div class="centrage">
            <main>
                <h3><span>TOI</span> joueur invéTéré,<br>on saiT que Tu Trépignes d’IMPATIENCE !</h3>
                <span>Alors</span>
                <span>Inscris Toi au plus viTe !</span>
                <!-- <form method="post"> -->
                <form name="form" id="suscribe" action="#main" method="POST" <?php if (isset($_POST['mail'])) { echo mailSend($_POST['mail']); } ?>>
                    <input type="text" name="nom" placeholder="Nom" aria-label="Nom">
                    <input type="text" name="prenom" placeholder="Prénom" aria-label="Prénom">
                    <input type="text" name="mail" placeholder="E-mail" aria-label="E-mail">
                    <div class="container">
                        <div class="interior">
                            <!-- <input type="checkbox" class="radio" name="checked"> -->
                            <label class="check">
                                <input type="checkbox" name="checked">
                                <div class="box"></div>
                            </label>
                            <a class="btn condition" href="#open-modal"><i class="fas fa-external-link-alt"></i>
                            J’accepTe les condiTions d’uTilisations</a>
                        </div>
                    </div>
                    <div id="open-modal" class="modal-window">
                        <div>
                            <a href="#main" title="Fermer" class="modal-close">x</a>
                            <h3>| DISCORDIA |<br>INSCRIPTION ET COMPTE</h3>
                            <p class ="reglementation">
                                <br><br>1. Sous réserve de votre accord et du respect continu de ces Conditions
                                d'utilisation et de toutes autres politique et conditions générales applicables,
                                Discordia vous accorde une licence limitée, non-exclusive, non-transférable,
                                non-cessible, révocable, et sujette aux restrictions ci-dessous, vous permettant
                                d'accéder et d'utiliser le Service pour vos propres fins de divertissement
                                non-commercial. Vous acceptez de ne pas utiliser le Service à d'autres fins.
                                Discordia propose une grande variété de jeux sur ses portails et sur d'autres
                                plateformes telles que les boutiques d'applications. Ces jeux sont gratuits, sauf
                                indication contraire. Cependant, vous êtes le seul responsable des coûts que vous
                                pourriez encourir en utilisant le Service par le biais du Wifi, ou de tout autre
                                service de communication. Dans certains jeux, vous pouvez acheter des articles virtuels
                                (comme un élément de jeu virtuel ou des pièces virtuelles), ou un abonnement pour
                                télécharger un jeu. Pour le traitement de tout paiement sur les Sites SPIL ou sur toute
                                autre plate-forme, Discordia peut utiliser des fournisseurs de paiement tiers comme
                                indiqué dans la Section 6.
                                <br><br>2. En s'inscrivant, vous confirmez être âgé de 16 ans ou plus.
                                <br><br>3. Discordia se réserve le droit de résilier et de désactiver définitivement
                                votre compte s'il est resté inactif pendant 180 jours. En cas de désactivation, nous
                                n'avons aucune obligation de conserver ou de fournir les données ou le contenu associés
                                à votre (ancien) compte, ou de rembourser les paiements effectués via votre (ancien)
                                compte, et nous pouvons autoriser un autre utilisateur à s'inscrire et à utiliser votre
                                ancien nom d'utilisateur. Nous n'avons également aucune obligation de supprimer des
                                données publiques, du contenu ou d'autres informations que vous avez téléchargées ou
                                publiées sur le Service.
                                <br><br>4. Sans limitation pour d'autres recours, Discordia peut limiter, suspendre,
                                résilier, modifier ou supprimer des comptes ou l'accès au Service ou à des parties de
                                celui-ci, si vous ne respectez pas les Conditions d'Utilisation, ou si Discordia vous
                                suspecte de ne pas le faire, ou pour toute utilisation présumée illégale ou abusive du
                                Service, sans préavis. Discordia n'est pas tenu de vous indemniser pour toute perte ou
                                tout résultat lié à ceci, y compris, mais sans s'y limiter, les avantages, privilèges
                                ou éléments virtuels associés à votre utilisation du Service.
                        </div>
                        </p>
                    </div>
                    <button id="subscribe" class="button" type="submit" required>S’inscrire</button>
                </form>
                <div class="navigation">
                    <aside>Par ici !</aside>
                    <a class="scroller js-scrollTo" href="#footer"></a>
                </div>
            </main>
        </div>
    </div>
    <div class="footerBkg" id="footer">
        <div class="centrage">
            <footer>
                <article>
                    <h3>Pourquoi les Campos et les AsTrologias<br>se casTagnenT-ils ?</h3>
                    <p class="story">Il y a bien longtemps, le monde de DISCORDIA était habité par différentes tribus
                        nomades.<br><br>
                        Au fil des siècles, la plupart d’entre elles se sédentarisèrent et l’on vit l’emmergence de
                        deux
                        grandes tribus.<br><br>
                        D’une part, la tribu des Campos qui on choisit de vivre de façon très prosaïque.
                        D’autre part, la tribu Astrologia a choisi de se tourner vers le culte de la divination.<br><br>
                        En manipulant la magie astrale il purent invoquer des créatures venues du ciel pour envahir la
                        tribu des Campos et régner sur DISCORDIA.
                    </p>
                    <p class="story">Obligés de se défendre les Campos affrontèrent les Atrologia durant des décennies.<br><br>
                        Mais, las de ce conflit sans fin, les chefs des clans Astrologia et Campos décidèrent d’y
                        mettre un
                        terme.<br><br>
                        Pour arriver à cet incroyable miracle ils choisirent d'opposer leurs meilleurs guerriers au
                        cours
                        d’un combat.
                    </p>
                    <p>CETTE ANNÉE, on compTe sur TOI<br>pour Te baTTre et régner sur Discordia !!!</p>
                </article>
                <div class="navigation">
                    <aside>ET hop on remonTe !</aside>
                    <a class="scroller js-scrollTo" href="#main"></a>
                </div>

            </footer>
        </div>
        <div class="footer">
            <p>CopyrighT 2018 © DISCORDIA | Tous droiTs réservés</p>
        </div>
    </div>
    <script>
    /*<![CDATA[*/
        $(document).ready(function() {
            $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                var page = $(this).attr('href'); // Page cible
                var speed = 450; // Durée de l'animation (en ms)
                $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                return false;
            });
        });
    /*]]>*/
    </script>
</body>

</html>