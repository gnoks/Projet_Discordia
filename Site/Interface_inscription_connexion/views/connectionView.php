<div class="centrage">
        <?php   if(isset($msgErr)) echo '<div class="alert alert-danger" role="alert">'.$msgErr.'</div>'; 
                if(isset($msgValid)) echo '<div class="alert alert-success" role="alert">'.$msgValid.'</div>';
        ?>
        <form method="post">   
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Pseudo ou e-mail</label>
                    <input name="pseudo" type="text" class="form-control" id="validationDefault03" placeholder="Pseudo ou e-mail" value="<?php if(!empty($_POST['pseudo']))echo $_POST['pseudo']; ?>" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Mot de passe</label>
                    <input name="password" type="password" class="form-control" id="validationDefault04" placeholder="Mot de passe" required >
                </div>
            </div>
            <button name="login" class="btn btn-primary" type="submit">Se connecter</button>
        </form>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" href="?c=inscription&a=inscrire">Pas encore inscrit?</a>
            </li>    
        </ul>
        <a href="?c=recovery&a=recovery" class="badge badge-primary">Impossible de se connecter?</a>
</div>