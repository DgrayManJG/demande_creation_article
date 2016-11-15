<?php
$newTrtmt = $detailNewTrtmt[0];
$newTrtmtAsk = $detailNewTrtmt[1];
$longueurTraitement = $detailNewTrtmt[2];

$nbreNewTrtmtAsk = count($newTrtmtAsk);
$nbreLongueurTraitement = count($longueurTraitement);

// echo "<pre>";
// var_dump($newTrtmt);
// echo "</pre>";
// echo "<pre>";
// var_dump($newTrtmtAsk);
// echo "</pre>";
// echo "<pre>";
// var_dump($longueurTraitement);
// echo "</pre>";
//
// exit;


 ?>
<br>
<div class="form-group">
  <div class="container">
    <div class="row">
      <div>
        <a href="<?= site_url('dataNewTraitement'); ?>"><button type="button" name="button" class="btn btn-primary btn-lg active"> retour </button></a>
      </div>
      <div class="page-header">
         <h1 style="padding-top: 2cm;">Détail du nouveau traitement </h1>
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
              <td><?= $newTrtmt[0]->demandeur ?></td>
              <td><?= $newTrtmt[0]->date_demande ?></td>
              <td><?= $newTrtmt[0]->motif_demande ?></td>
            </tr>
          </tbody>
      </table>
    </div>

    <legend><h2><strong>information sur le traitement demander</strong></h2></legend>
    <!-- des espaces un peu mieux que </br> -->
    <div class="col-md-12">
      <p>

      </p>
    </div>

    <table class="table">
      <thead class="thead-default">
        <tr>
          <th>code_article_citis</th>
          <th>libelle_article_citis</th>
        </tr>
      </thead>
        <tbody>
          <tr>
            <td><?= $newTrtmt[0]->code_article_citis ?></td>
            <td><?= $newTrtmt[0]->libelle_article_citis ?></td>
          </tr>
        </tbody>
    </table>
  </div>

  <!-- des espaces un peu mieux que </br> -->
  <div class="col-md-12">
    <p>

    </p>
  </div>


        <?php for ($i=0; $i <= $nbreNewTrtmtAsk-1; $i++) {
          echo "
          <!-- des espaces un peu mieux que </br> -->
          <div class=\"col-md-12\">
            <p>

            </p>
          </div>
          <!-- des espaces un peu mieux que </br> -->
          <div class=\"col-md-12\">
            <p>

            </p>
          </div>

            <div class=\"form-group\">

          <legend><h2><strong>".$newTrtmtAsk[$i]->libelle."</strong></h2></legend>
          ";

          for ($a=0; $a <= $nbreLongueurTraitement-1; $a++) {
            if ($longueurTraitement[$a]->wa_new_trtmt_ask_id_new_trtmt_ask === $newTrtmtAsk[$i]->id_new_trtmt_ask) {

                  echo "
                  <table class=\"table\">
                    <thead class=\"thead-default\">
                      <tr>
                        <th>longueur_en_m</th>
                        <th>ref_article_client</th>
                        <th>gencod_client</th>
                      </tr>
                    </thead>
                      <tbody>
                        <tr>
                          <td>".$longueurTraitement[$a]->longueur_en_m."</td>
                          <td>".$longueurTraitement[$a]->ref_article_client."</td>
                          <td>".$longueurTraitement[$a]->gencod_client."</td>
                        </tr>
                      </tbody>
                  </table>
                  ";

                  }
                }

            echo "</div>";
          }
        ?>

    </div>
  </div>
