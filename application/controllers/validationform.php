<?php

/**
 *
 */
class Validationform extends CI_Controller
{


  public function index()
	{
		//redirect(array('error', 'probleme'));
    $this->validation();
	}

  public function validation(){
			//	Chargement de la bibliothèque
			$this->load->library('form_validation');


      /********* data de la table WA_contenu_demande **********/
      $gamme_produit = $_POST['gamme_produit'];
      $volume_mois = $_POST['volume_mois'];
      $essence = $_POST['essence'];
      $profil = $_POST['profil'];
      $etat_surface = $_POST['etat_surface'];
      $conditionnement_botte = $this->validationConditionnementBotte($_POST);
      $conditionnement_palette = $this->validationConditionnementPalette($_POST);
      $unite_vente = $_POST['unite_vente'];
      $unite_facture = $_POST['unite_facture'];
      $produit_spec_client = $this->validationProduitSpecClient($_POST);
      $etiquette_botte = $this->validationEtiquetteBotte($_POST);
      $etiquette_gencod = $this->validationEtiquetteGENCOD($_POST);
      $normes_environnementales = $_POST['normes_environnementales'];
      $marquage_ce = $_POST['marquage_ce'];

      /********* data de la table WA_demande *********/
      $demandeur = $_POST['demandeur'];
      $motif_demande = $_POST['motif_demande'];

      /********* data de la table WA_traitement *********/
      $etat_traitement = $_POST['etat_traitement'];
      $classe_traitement = $_POST['classe_traitement'];
      $couleur_traitement = $_POST['couleur_traitement'];

      /********* data de la table WA_dimensions *********/
      $longueur_m = $_POST['longueur_m'];
      $largeur_mm = $_POST['largeur_mm'];
      $epaisseur_mm = $_POST['epaisseur_mm'];

      /********* data de la table WA_couleur *********/
      $couleur = $_POST['couleur'];

      /********* data de la table WA_marque_commercial *********/
      $marque_commercial = $_POST['marque_commercial'];
      $mdd = $_POST['mdd'];
      $cnuf = $_POST['cnuf'];

      /********* data de la table WA_accessoires *********/
      $accessoire = $_POST['accessoire'];


      /**** Initialisation du model contenu_demande_model.php ***/
      $this->load->model('contenu_demande_model', 'contenuDemande');
      $this->load->model('demande_model', 'demande');
      $this->load->model('traitement_model', 'traitement');
      $this->load->model('dimensions_model', 'dimensions');
      $this->load->model('couleur_model', 'couleur');
      $this->load->model('marque_commercial_model', 'marqueCommercial');
      $this->load->model('accessoires_model', 'accessoires');


      /*** Appel de la méthode add_contenu_demande dans le model contenu_demande_model ***/
    /*	$resultatContenuDemande = $this->contenuDemande->add_contenu_demande($gamme_produit, $volume_mois, $essence, $profil,
                                          $etat_surface, $conditionnement_botte, $conditionnement_palette,
                                          $unite_vente, $unite_facture, $produit_spec_client, $etiquette_botte,
                                          $etiquette_gencod, $normes_environnementales, $marquage_ce);

    	var_dump($resultatContenuDemande);*/

      /*** on récupére le dernier ID insérer de la table contenu_demande ***/
    /*  $last_id_insert = $this->contenuDemande->get_last_id_contenu_demande();
      $id_contenu_demande = $last_id_insert[0]->id_contenu_demande;

      $resultatDemande = $this->demande->add_demande($demandeur, $motif_demande, $id_contenu_demande);
      $resultatTraitement = $this->traitement->add_traitement($etat_traitement, $classe_traitement, $couleur_traitement, $id_contenu_demande);
      $resultatDimensions = $this->dimensions->add_dimensions($longueur_m, $largeur_mm, $epaisseur_mm, $id_contenu_demande);
      $resultatCouleur = $this->couleur->add_couleur($couleur, $id_contenu_demande);
      $resultatMarqueCommercial = $this->marqueCommercial->add_marque_commercial($marque_commercial, $mdd, $cnuf, $id_contenu_demande);
      $resultatAccessoires = $this->accessoires->add_accessoires($accessoire, $id_contenu_demande);

      var_dump($resultatDemande);
      var_dump($resultatTraitement);
      var_dump($resultatDimensions);
      var_dump($resultatCouleur);
      var_dump($resultatMarqueCommercial);
      var_dump($resultatAccessoires);*/



      // $this->load->database();
      echo '<pre>';
      var_dump($_POST);
      echo '</pre>';


	}

  public function validationEtiquetteGENCOD($post){
    $etiquette_gencod_radio = $post['etiquette_gencod_radio']; // = non ou oui

    if($etiquette_gencod_radio == 'oui'){
      $etiquette_gencod_pricisé = $post['etiquette_gencod_pricisé']; // imposé par l'enseigne ou libre
      $etiquette_gencod = $post['etiquette_gencod_text'];
      if($etiquette_gencod_pricisé == 'libres'){
        $etiquette_gencod = $post['etiquette_gencod_pricisé'];
      } else {
        $etiquette_gencod = $post['etiquette_gencod_text'];
      }
    } else {
        $etiquette_gencod = 'non';
    }
    return $etiquette_gencod;
  }

  public function validationEtiquetteBotte($post){
    $etiquette_botte = $_POST['etiquette_botte_radio'];
    if($etiquette_botte == 'non'){
        $etiquette_botte = 'non';
    } else {
      $etiquette_botte = $_POST['etiquette_botte'];
    }
    return $etiquette_botte;
  }

  public function validationProduitSpecClient($post){
    $produit_spec_client = $_POST['produit_spec_client_radio'];
    if($produit_spec_client == 'non'){
        $produit_spec_client = 'non';
    } else {
      $produit_spec_client = $_POST['produit_spec_client'];
    }
    return $produit_spec_client;
  }

  public function validationConditionnementBotte($post){
    $conditionnement_botte = $_POST['conditionnement_botte_radio'];
    if($conditionnement_botte == 'non'){
        $conditionnement_botte = 'non';
    } else {
      $conditionnement_botte = $_POST['conditionnement_botte'];
    }
    return $conditionnement_botte;
  }

  public function validationConditionnementPalette($post){
    $conditionnement_palette = $_POST['conditionnement_palette_radio'];
    if($conditionnement_palette == 'non'){
        $conditionnement_palette = 'non';
    } else {
      $conditionnement_palette = $_POST['conditionnement_palette'];
    }
    return $conditionnement_palette;
  }

  

}
