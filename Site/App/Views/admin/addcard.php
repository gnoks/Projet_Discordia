<h1>Ajouter carte</h1>
<form action="?p=admin&action=addingcard" method="post">
    <div class="from-group">
    <label for=""></label>
        <input type="text" class="form-control" placeholder="Nom de la carte" name="nom">
    </div>
    <div class="from-group">
    <label for=""></label>
        <textarea  type="textarea" class="form-control" placeholder="Description de la carte" name="description" rows="5"></textarea>
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="number" class="form-control" placeholder="Dégats de la carte" name="degats">
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="number" class="form-control" placeholder="Points de vie de la carte" name="pdv">
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="number" class="form-control" placeholder="Mana de la carte" name="mana">
    </div>
    <div class="form-group">
    <label for="habiliter"></label>
    <select class="form-control" id="habiliter" name="habiliter">
      <?php foreach( $listHabiliter as $v) : ?>
        <option value="<?php echo $v['hab_id']; ?>">Type : <?php echo $v['hab_type']; ?></option>
      <?php endforeach ?>
    </select>
    </div>
    <div class="from-group">
    <label for=""></label>
        <input type="file" name="image" class="form-control-file">
    </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>


</form>
