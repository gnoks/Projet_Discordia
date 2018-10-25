<div class="centrage">
    <?php   
        if(isset($msgErr)) echo '<div class="alert alert-danger" role="alert">'.$msgErr.'</div>'; 
        if(isset($msgValid)) echo '<div class="alert alert-success" role="alert">'.$msgValid.'</div>';
        ?>
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Saisissez l'adresse mail associée à votre compte ici</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse mail">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>