
<!--
* View inscription
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1 
-->


<div class="formulaire">
        <?php   if(isset($msgErr)) echo '<div class="alert alert-danger" role="alert">'.$msgErr.'</div>'; 
                if(isset($msgValid)) echo '<div class="alert alert-success" role="alert">'.$msgValid.'</div>';?>
        <form method="post">
            <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault01">Prénom</label>
                <input name="prenom" type="text" class="form-control" id="validationDefault01" placeholder="Prénom" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Nom</label>
                <input name="nom" type="text" class="form-control" id="validationDefault02" placeholder="Nom" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">E-mail</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                </div>
                <input name="email" type="text" class="form-control" id="validationDefaultUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Pseudo</label>
                <input name="pseudo" type="text" class="form-control" id="validationDefault03" placeholder="Pseudo" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault04">Mot de passe</label>
                <input name="password" type="password" class="form-control" id="validationDefault04" placeholder="Mot de passe" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault05">Date de naissance</label>
                <input name="date" type="date" class="form-control" id="validationDefault05" placeholder="Date de naissance" required>
            </div>
            </div>
            <button name="addUser" class="btn btn-primary" type="submit">S'inscrire</button>
        </form>
        <br>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" href="?login">Vous avez déjà un compte?</a>
            </li>    
        </ul>
    </div>
