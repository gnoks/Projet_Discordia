<h1>Editer carte</h1>
<form action="?p=admin&action=editingcard&id=<?php echo $carte['car_id']; ?>" method="post">
    <div class="from-group">
    <label for=""></label>
        <input type="text" class="form-control" placeholder="Nom de la carte" name="nom" value="<?php echo $carte['car_nom']; ?>">
    </div>
    <div class="from-group">
    <label for=""></label>
        <textarea  type="textarea" class="form-control" placeholder="Description de la carte" name="description" rows="5"><?php echo $carte['car_description']; ?></textarea>
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="number" class="form-control" placeholder="Dégats de la carte" name="degats" value="<?php echo $carte['car_degats']; ?>">
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="number" class="form-control" placeholder="Points de vie de la carte" name="pdv" value="<?php echo $carte['car_pdv']; ?>">
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="number" class="form-control" placeholder="Mana de la carte" name="mana" value="<?php echo $carte['car_mana']; ?>">
    </div>
    <div class="form-group">
    <label for="habiliter"></label>
    <select class="form-control" id="habiliter" name="habiliter">
      <?php foreach( $listHabiliter as $v) : 
        $attributes = '';
        if($v['hab_id'] === $habiliterCard['hab_id'])
            $attributes = ' selected';
        ?>
        <option value="<?php echo $v['hab_id']; ?>"<?php echo $attributes; ?>>Type : <?php echo $v['hab_type']; ?></option>
      <?php endforeach ?>
    </select>
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="file" name="image" class="form-control-file">
    </div>
        <button type="submit" class="btn btn-primary">Edit</button>


</form>