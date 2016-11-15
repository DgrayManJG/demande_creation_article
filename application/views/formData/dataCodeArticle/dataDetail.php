<?php
$contenu_demande = $detailContenuDemande[0];
$demande = $detailContenuDemande[1];
$traitement = $detailContenuDemande[2];
$dimensions = $detailContenuDemande[3];
$couleur = $detailContenuDemande[4];
$marque_commercial = $detailContenuDemande[5];
$accessoire = $detailContenuDemande[6];

$nbreCouleur = count($couleur);
$nbreAccessoire = count($accessoire);


 ?>
<style media="screen">
  .bouton-retour{
    text-align:right;
  }
</style>

<br>
<div class="form-group">

  <div class="container">
    <div class="row">
      <div>
        <a href="<?= site_url('dataCodeArticle'); ?>"><button type="button" name="button" class="btn btn-primary btn-lg active"> retour </button></a>
      </div>

      <div class="page-header">
         <h1 style="padding-top: 2cm;">Détail de l'article </h1>
       </div>
    </div>
  </div>
</div>

<br/>
<br/>
<br/>

<!-- -->

  <div class="container">
    <div class="row">
      <?php
      echo "<pre>";
      //var_dump($detailContenuDemande);
      echo "</pre>";
      ?>

    <div class="form-group">

      <legend>
        <h2>
          <strong>
            information sur le demandeur
          </strong>
        </h2>
      </legend>
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
              <td><?= $demande[0]->demandeur ?></td>
              <td><?= $demande[0]->date_demande ?></td>
              <td><?= $demande[0]->motif_demande ?></td>
            </tr>
          </tbody>
      </table>
    </div>
    <!-- des espaces un peu mieux que </br> -->
    <div class="col-md-12">
      <p>

      </p>
    </div>
    <div class="col-md-12">
      <p>

      </p>
    </div>

    <div class="form-group">
      <legend><h2><strong>Détails de la demande</strong></h2></legend>
      <!-- des espaces un peu mieux que </br> -->
      <div class="col-md-12">
        <p>

        </p>
      </div>

      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>gamme_produit</th>
            <th>volume_mois</th>
            <th>essence</th>
            <th>profil</th>
            <th>etat_surface</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $contenu_demande[0]->gamme_produit ?></td>
              <td><?= $contenu_demande[0]->volume_mois ?></td>
              <td><?= $contenu_demande[0]->essence ?></td>
              <td><?= $contenu_demande[0]->profil ?></td>
              <td><?= $contenu_demande[0]->etat_surface ?></td>
            </tr>
          </tbody>
      </table>

      <!-- des espaces un peu mieux que </br> -->
      <div class="col-md-12">
        <p>

        </p>
      </div>

      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>conditionnement_botte</th>
            <th>conditionnement_palette</th>
            <th>libelle_famille</th>
            <th>libelle_sous_famille</th>
            <th>unite_vente</th>
            <th>unite_facture</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $contenu_demande[0]->conditionnement_botte ?></td>
              <td><?= $contenu_demande[0]->conditionnement_palette ?></td>
              <td><?= $contenu_demande[0]->libelle_famille ?></td>
              <td><?= $contenu_demande[0]->libelle_sous_famille ?></td>
              <td><?= $contenu_demande[0]->unite_vente ?></td>
              <td><?= $contenu_demande[0]->unite_facture ?></td>
            </tr>
          </tbody>
      </table>

      <!-- des espaces un peu mieux que </br> -->
      <div class="col-md-12">
        <p>

        </p>
      </div>

      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>produit_spec_client</th>
            <th>etiquette_botte</th>
            <th>etiquette_gencod</th>
            <th>normes_environnementales</th>
            <th>marquage_ce</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $contenu_demande[0]->produit_spec_client ?></td>
              <td><?= $contenu_demande[0]->etiquette_botte ?></td>
              <td><?= $contenu_demande[0]->etiquette_gencod ?></td>
              <td><?= $contenu_demande[0]->normes_environnementales ?></td>
              <td><?= $contenu_demande[0]->marquage_ce ?></td>
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
      <legend><h2><strong>information sur la dimensions du produit</strong></h2></legend>
      <!-- des espaces un peu mieux que </br> -->
      <div class="col-md-12">
        <p>

        </p>
      </div>
      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>longueur_m</th>
            <th>largeur_mm</th>
            <th>epaisseur_mm</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $dimensions[0]->longueur_m ?></td>
              <td><?= $dimensions[0]->largeur_mm ?></td>
              <td><?= $dimensions[0]->epaisseur_mm ?></td>
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
      <legend><h2><strong>information sur le traitement du produit</strong></h2></legend>
      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>etat_traitement</th>
            <th>classe_traitement</th>
            <th>couleur_traitement</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $traitement[0]->etat_traitement ?></td>
              <td><?= $traitement[0]->classe_traitement ?></td>
              <td><?= $traitement[0]->couleur_traitement ?></td>
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
      <legend><h2><strong>Marque commercial</strong></h2></legend>
      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>marque_commercial</th>
            <th>mdd</th>
            <th>cnuf</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $marque_commercial[0]->marque_commercial ?></td>
              <td><?= $marque_commercial[0]->mdd ?></td>
              <td><?= $marque_commercial[0]->cnuf ?></td>
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
      <legend><h2><strong>couleur du produit</strong></h2></legend>
      <table class="table">
        <thead class="thead-default">
          <tr>
            <?php for ($i=0; $i <= $nbreCouleur-1; $i++) {
              echo "<th>couleur</th>";
            } ?>
          </tr>
        </thead>
          <tbody>
            <tr>
              <?php for ($i=0; $i <= $nbreCouleur-1; $i++) {
                echo "<td>".$couleur[$i]->couleur."</td>";
              } ?>
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
      <legend><h2><strong>asseccoire du produit</strong></h2></legend>
      <table class="table">
        <thead class="thead-default">
          <tr>
            <?php for ($i=0; $i <= $nbreAccessoire-1; $i++) {
              echo "<th>accessoire</th>";
            } ?>
          </tr>
        </thead>
          <tbody>
            <tr>
              <?php for ($i=0; $i <= $nbreAccessoire-1; $i++) {
                echo "<td>".$accessoire[$i]->accessoire."</td>";
              } ?>
            </tr>
          </tbody>
      </table>
    </div>

    </div>
  </div>
