<?php
/**
 *
 */
class Validationform extends CI_Controller
{

  public function index()
	{
    if(isset($_POST['demandeur'])){
      $this->validation();
    } else {
      redirect('formCodeArticle', 'refresh');
    }
	}

  public function validation(){
      $data = array();
			//Chargement de la bibliothèque
			$this->load->library('form_validation');
      $this->validationCouleur($_POST);
      $this->validationAsseccoire($_POST);

      /********* data de la table WA_contenu_demande **********/
      $gamme_produit = $_POST['gamme_produit'];
      $volume_mois = $_POST['volume_mois'];
      $essence = $_POST['essence'];
      $profil = $_POST['profil'];
      $etat_surface = $_POST['etat_surface'];
      $conditionnement_botte = $this->validationConditionnementBotte($_POST);
      $conditionnement_palette = $this->validationConditionnementPalette($_POST);
      $libelle_famille = $_POST['libelle_famille'];
      $libelle_sous_famille = $this->validationSousFamille($_POST);
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

      /**** Initialisation du model contenu_demande_model.php ****/
      $this->load->model('contenu_demande_model', 'contenuDemande');
      $this->load->model('demande_model', 'demande');
      $this->load->model('traitement_model', 'traitement');
      $this->load->model('dimensions_model', 'dimensions');
      $this->load->model('couleur_model', 'couleur');
      $this->load->model('marque_commercial_model', 'marqueCommercial');
      $this->load->model('accessoires_model', 'accessoires');


      /*** Appel de la méthode add_contenu_demande dans le model contenu_demande_model ***/
      $resultatContenuDemande = $this->contenuDemande->add_contenu_demande($gamme_produit, $volume_mois, $essence, $profil,
                                          $etat_surface, $conditionnement_botte, $conditionnement_palette, $libelle_famille, $libelle_sous_famille,
                                          $unite_vente, $unite_facture, $produit_spec_client, $etiquette_botte,
                                          $etiquette_gencod, $normes_environnementales, $marquage_ce);


      /*** on récupére le dernier ID insérer de la table contenu_demande ***/
      $last_id_insert = $this->contenuDemande->get_last_id_contenu_demande();
      $id_contenu_demande = $last_id_insert[0]->id_contenu_demande;

      $resultatDemande = $this->demande->add_demande($demandeur, $motif_demande, $id_contenu_demande);
      $resultatTraitement = $this->traitement->add_traitement($etat_traitement, $classe_traitement, $couleur_traitement, $id_contenu_demande);
      $resultatDimensions = $this->dimensions->add_dimensions($longueur_m, $largeur_mm, $epaisseur_mm, $id_contenu_demande);


      $resultatCouleur = $this->couleur->add_couleur($couleur, $id_contenu_demande);
      if (isset($_POST['couleur2'])) {
        $couleur2 = $_POST['couleur2'];
        $resultatCouleur = $this->couleur->add_couleur($couleur2, $id_contenu_demande);
      }
      if (isset($_POST['couleur3'])) {
        $couleur3 = $_POST['couleur3'];
        $resultatCouleur = $this->couleur->add_couleur($couleur3, $id_contenu_demande);
      }
      if (isset($_POST['couleur4'])) {
        $couleur4 = $_POST['couleur4'];
        $resultatCouleur = $this->couleur->add_couleur($couleur4, $id_contenu_demande);
      }

      $resultatMarqueCommercial = $this->marqueCommercial->add_marque_commercial($marque_commercial, $mdd, $cnuf, $id_contenu_demande);

      $resultatAccessoires = $this->accessoires->add_accessoires($accessoire, $id_contenu_demande);
      if (isset($_POST['accessoire2'])) {
        $accessoire2 = $_POST['accessoire2'];
        $resultatAccessoires = $this->accessoires->add_accessoires($accessoire2, $id_contenu_demande);
      }
      if (isset($_POST['accessoire3'])) {
        $accessoire3 = $_POST['accessoire3'];
        $resultatAccessoires = $this->accessoires->add_accessoires($accessoire3, $id_contenu_demande);
      }
      if (isset($_POST['accessoire4'])) {
        $accessoire4 = $_POST['accessoire4'];
        $resultatAccessoires = $this->accessoires->add_accessoires($accessoire4, $id_contenu_demande);
      }


      if($resultatContenuDemande == 'true'){
        $data['alert'] = 'true';
        $data['contenu_alert'] = 'La requête d\'insertion a bien été enregistré';
        $this->send_mail($demandeur, $gamme_produit, $volume_mois, $essence, $profil, $motif_demande);
      } else {
        $data['alert'] = 'false';
        $data['contenu_alert'] = 'une erreur est survenu lors du traitement de la demande';
      }

      $data['title'] = 'Creation code article';
      $this->load->view('header-footer/header.php', $data);
	  	$this->load->view('form/formCodeArticle/formulaire', $data);
    	$this->load->view('header-footer/footer.php');

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

  public function validationSousFamille($post){
    if(isset($_POST['libelle_sous_famille'])){
      $libelle_sous_famille = $_POST['libelle_sous_famille'];
    } else{
      $libelle_sous_famille = 'NULL';
    }
    return $libelle_sous_famille;
  }

  public function validationCouleur($post){
    if($_POST['couleur2'] == ''){
      unset($_POST['couleur2']);
    }

    if($_POST['couleur3'] == ''){
      unset($_POST['couleur3']);
    }

    if($_POST['couleur4'] == ''){
      unset($_POST['couleur4']);
    }
  }

  public function validationAsseccoire($post){
    if($_POST['accessoire2'] == ''){
      unset($_POST['accessoire2']);
    }

    if($_POST['accessoire3'] == ''){
      unset($_POST['accessoire3']);
    }

    if($_POST['accessoire4'] == ''){
      unset($_POST['accessoire4']);
    }
  }

  /* !!!!!! pas utilisé */
  public function validationEtatTraitement($post){
    if(strlen($_POST['etat_traitement']) > 1){

      $data['alert'] = 'false';
      $data['contenu_alert'] = 'la champ etat_traitement ne dois pas excéder 1 caractére';

      $this->load->view('header-footer/header.php');
	  	$this->load->view('form/formCodeArticle/formulaire', $data);
    	$this->load->view('header-footer/footer.php');
    }
  }

  public function send_mail($demandeur, $gamme_produit, $volume_mois, $essence, $profil, $motif_demande){
    $config = Array(
                    'protocol' => 'mail',
                    'mail_host' => 'ExchangeISB.isb.groupe-isb.fr',
                    'mail_port' => 25001,
                    'mail_user' => '',
                    'mail_pass' => '',
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'wrapchars' => 76,
                    'newline'   => '\r\n'
                );
    $this->load->library('email', $config);
    $email = $this->email;


    $this->load->library('envoie_email');

    $this->envoie_email->send_mail($email, $demandeur, $gamme_produit, $volume_mois, $essence, $profil, $motif_demande);
	}


}
