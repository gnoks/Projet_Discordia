<header>
    <?php   
        if(isset($msgErr)) echo '<div class="alert alert-danger" role="alert">'.$msgErr.'</div>'; 
        if(isset($msgValid)) echo '<div class="alert alert-success" role="alert">'.$msgValid.'</div>';
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Cartes</a>
                </li>
            </ul>
            <?php 
                if (empty($_SESSION['user'])) { ?>                                                   
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#connection">
                    Se connecter
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="connection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Connection</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action ="?p=connection&action=connection" method="post">   
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
                                    <a href="?p=recovery&action=recovery" class="badge badge-primary">Impossible de se connecter?</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inscription">
                    S'inscrire
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">S'inscrire</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action ="?p=inscription&action=inscrire" method="post">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?c=connection&a=connection">Connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="?c=inscription&a=inscrire">Inscription</a>
                        </div> -->
                <?php  
                }else{ 
                ?>
                        <a class="dropdown-item" href="#">Paramètres</a>
                        <a class="dropdown-item" href="?p=accueil&action=unset">Deconnection</a>
                <?php
                }
                ?>
                <!-- <form action ="" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form> -->
        </div>
    </nav>
    

</header>
    