<h1>Liste des cartes</h1>
<table class="table">
<thead>
<tr>
<?php foreach($cartes[0] as $k=>$v) : ?>
    <th scope="col"><?php echo $k; ?></th>
<?php endforeach; ?>
<th>Actions</th>
</tr>
</thead>
<tbody>

<?php foreach($cartes as $v) : ?>
<tr>
    <?php foreach($v as $carte) : ?>
    <td scope="col"><?php echo $carte; ?></td>
<?php endforeach; ?>
<td>

<a href="?p=admin&action=editcard&id=<?php echo $v['car_id']; ?>" class="btn btn-dark">Edit</a>
</td>
<td>
<a href="" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
