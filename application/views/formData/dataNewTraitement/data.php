<?php
echo "<pre>";
//var_dump($newTraitement);
echo "</pre>";
?>
<div class="form-group">

  <div class="container">
   <div class="page-header">
      <h1>Liste des taitements</h1>
      <h3>Super famille Rabotés ou Sciés</h3>
    </div>
  </div>
</div>

<br/>
<br/>
<br/>
<div class="table-data">
  <div class="container">
    <div class="row">

      <a href="<?= site_url('formNewTraitement'); ?>"><button type="button" name="button" class="btn btn-primary btn-lg active"> formulaire nouveau traitement </button></a>
      <!-- des espaces un peu mieux que </br> -->
      <div class="col-md-12">
        <p>

        </p>
      </div>
      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>ID</th>
            <!-- <th></th> -->
            <th>code_article_citis</th>
            <th>libelle_article_citis</th>
            <th>date_demande</th>
            <th></th>
          </tr>
        </thead>
        <?php foreach ($newTraitement as $value): ?>
          <tbody>
            <tr>
              <th scope="row"><?= $value->id_new_trtmt ?></th>
              <!-- <td><input type="checkbox"></td> -->
              <td><?= $value->code_article_citis ?></td>
              <td><?= $value->libelle_article_citis ?></td>
              <td><?= $value->date_demande ?></td>
              <td><a href="<?= site_url('dataDetailNewTraitement/'.$value->id_new_trtmt); ?>"><button type="button" name="button" class="btn btn-secondary">Détail</button></a></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>

</div>
