<?php

class DataDetail extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

	public function index($num)
  {
    $idContenuDemande = $num;

    $this->dataDetail($idContenuDemande);
	}

	public function dataDetail($idContenuDemande)
  {
    $this->load->model('contenu_demande_model', 'contenuDemande');
    $this->load->model('demande_model', 'demande');
    $this->load->model('traitement_model', 'traitement');
    $this->load->model('dimensions_model', 'dimensions');
    $this->load->model('couleur_model', 'couleur');
    $this->load->model('marque_commercial_model', 'marqueCommercial');
    $this->load->model('accessoires_model', 'accessoires');

    $resultatContenuDemande = $this->contenuDemande->get_contenu_demande_by_id($idContenuDemande);
    $resultatDemande = $this->demande->get_demande_by_id_contenu_demande($idContenuDemande);
    $resultatTraitement = $this->traitement->get_traitement_by_id_contenu_demande($idContenuDemande);
    $resultatDimensions = $this->dimensions->get_dimensions_by_id_contenu_demande($idContenuDemande);
    $resultatCouleur = $this->couleur->get_couleur_by_id_contenu_demande($idContenuDemande);
    $resultatMarqueCommercial = $this->marqueCommercial->get_marque_commercial_by_id_contenu_demande($idContenuDemande);
    $resultatAccessoires = $this->accessoires->get_accessoires_by_id_contenu_demande($idContenuDemande);

    $data['detailContenuDemande'] = array($resultatContenuDemande, $resultatDemande, $resultatTraitement, $resultatDimensions, $resultatCouleur, $resultatMarqueCommercial, $resultatAccessoires);

    $data['title'] = 'détail article "'.$idContenuDemande.'"';
    $this->load->view('header-footer/header_b_V4.php', $data);
    $this->load->view('formData/dataCodeArticle/dataDetail');
    $this->load->view('header-footer/footer.php');

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";
	}

}
