<?php include("../SIMPLON/Pages/header.php") ?>
<h2 class="text-center mt-3 perso_colorBleutMenu perso_policeTitre perso_textShadow">Liste des participants</h2>

<?php require_once('db/db.php');

  $sql = ("SELECT * FROM `participant` ORDER BY ID ASC");
    $res = $connex->query($sql);
    if (!$res) {
      echo "La réccupération a échoué !";
    }else{
      $tab = $res->rowCount();
    }
?>
<h5> Nous avons <?= $tab;?> participants</h5>
<table class="table table-hover">
  <thead class="table-danger">
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">PRENOMS</th>
      <th scope="col">CONCAT</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $lists = $res->fetchAll();
  foreach ($lists as $list):?> 
      <td><?= $list['Nom']; ?></td>
      <td><?= $list['Prenoms']; ?></td>
      <td><?= $list['contact']; ?></td>
      <td><?= $list['email']; ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php require_once('db/close_db.php'); ?>
<?php include("../SIMPLON/Pages/footer.php") ?>