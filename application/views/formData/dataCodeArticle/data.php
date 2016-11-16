<br>
<div class="form-group">

  <div class="container">
   <div class="page-header">
      <h1>Liste des articles</h1>
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
      <a href="<?= site_url('formCodeArticle'); ?>"><button type="button" name="button" class="btn btn-primary btn-lg active"> formulaire création article </button></a>
      <!-- des espaces un peu mieux que </br> -->
      <div class="col-md-12">
        <p>

        </p>
      </div>
      <table id="example" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>gamme_produit</th>
            <th>volume_mois</th>
            <th>normes_environnementales</th>
            <th>libelle_famille</th>
            <th>libelle_sous_famille</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php foreach ($contenuDemande as $value): ?>
            <tr>
              <th><?= $value->id_contenu_demande ?></th>
              <td><?= $value->gamme_produit ?></td>
              <td><?= $value->volume_mois ?></td>
              <td><?= $value->normes_environnementales ?></td>
              <td><?= $value->libelle_famille ?></td>
              <td><?= $value->libelle_sous_famille ?></td>
              <td><a href="<?= site_url('dataDetailCodeArticle/'.$value->id_contenu_demande); ?>"><button type="button" name="button" class="btn btn-secondary">Détail</button></a></td>
            </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>


</div>
