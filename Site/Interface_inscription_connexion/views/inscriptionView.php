<div class="centrage">
        <?php   if(isset($msgErr)) echo '<div class="alert alert-danger" role="alert">'.$msgErr.'</div>'; 
                if(isset($msgValid)) echo '<div class="alert alert-success" role="alert">'.$msgValid.'</div>';?>
        <form method="post">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Prénom</label>
                    <input name="prenom" type="text" class="form-control" id="validationDefault01" placeholder="Prénom" value="<?php if(!empty($_POST['prenom']))echo $_POST['prenom']; ?>" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Nom</label>
                    <input name="nom" type="text" class="form-control" id="validationDefault02" placeholder="Nom" value="<?php if(!empty($_POST['nom']))echo $_POST['nom']; ?>" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">E-mail</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    </div>
                    <input name="email" type="text" class="form-control" id="validationDefaultUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend2" value = "<?php if(!empty($_POST['email']))echo $_POST['email']; ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Pseudo</label>
                    <input name="pseudo" type="text" class="form-control" id="validationDefault03" placeholder="Pseudo" value ="<?php if(!empty($_POST['pseudo']))echo $_POST['pseudo']; ?>" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Mot de passe</label>
                    <input name="password" type="password" class="form-control" id="validationDefault04" placeholder="Mot de passe" required>
                </div>
            </div>
            <button name="addUser" class="btn btn-primary" type="submit">S'inscrire</button>
        </form>
        <br>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" href="?c=connection&a=connection">Vous avez déjà un compte?</a>
            </li>    
        </ul>
    </div>
