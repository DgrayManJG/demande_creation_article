<?php
$nouvelle_longueur = $detailNouvelleLongueur[0];
$longueur = $detailNouvelleLongueur[1];

$nbreLongueur = count($longueur);


 ?>
<br>
<div class="form-group">
  <div class="container">
    <div class="row">
      <div>
        <a href="<?= site_url('dataNewLongueur'); ?>"><button type="button" name="button" class="btn btn-primary btn-lg active"> retour </button></a>
      </div>
      <div class="page-header">
         <h1 style="padding-top: 2cm;">Détail de la nouvelle longueur </h1>
       </div>
    </div>
  </div>
</div>

<br/>
<br/>
<br/>
  <div class="container">
    <div class="row">
      <?php
      echo "<pre>";
      //var_dump($detailNouvelleLongueur);
      echo "</pre>";
      ?>

    <div class="form-group">
      <legend><h2><strong>information sur le demandeur</strong></h2></legend>
      <!-- des espaces un peu mieux que </br> -->
      <div class="col-md-12">
        <p>

        </p>
      </div>

      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>le demandeur</th>
            <th>date de la demande</th>
            <th>le motif de la demande</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $nouvelle_longueur[0]->demandeur ?></td>
              <td><?= $nouvelle_longueur[0]->date_demande ?></td>
              <td><?= $nouvelle_longueur[0]->motif_demande ?></td>
            </tr>
          </tbody>
      </table>
    </div>

    <!-- des espaces un peu mieux que </br> -->
    <div class="col-md-12">
      <p>

      </p>
    </div>
    <!-- des espaces un peu mieux que </br> -->
    <div class="col-md-12">
      <p>

      </p>
    </div>

      <div class="form-group">
        <legend><h2><strong>longueur</strong></h2></legend>

        <?php for ($i=0; $i <= $nbreLongueur-1; $i++) {
          # code...
            echo "<table class=\"table\">
              <thead class=\"thead-default\">
                <tr>
                  <th>longueur_en_m</th>
                  <th>ref_article_client</th>
                  <th>gencod_client</th>
                </tr>
              </thead>
                <tbody>
                  <tr>
                    <td>".$longueur[$i]->longueur_en_m."</td>
                    <td>".$longueur[$i]->ref_article_client."</td>
                    <td>".$longueur[$i]->gencod_client."</td>
                  </tr>
                </tbody>
            </table>";
        } ?>

      </div>

    </div>
  </div>
