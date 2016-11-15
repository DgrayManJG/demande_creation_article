<?php

class Data extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

	public function index()
  {
		$this->data();
	}

	public function data()
  {
    $resultatContenuDemande = $this->getData();

	  $data['title'] = 'liste code article';
    $data['contenuDemande'] = $resultatContenuDemande;
  	$this->load->view('header-footer/header_b_V4.php', $data);
  	$this->load->view('formData/dataCodeArticle/data');
  	$this->load->view('header-footer/footer.php');
	}
  public function getData()
  {
    $this->load->model('contenu_demande_model', 'contenuDemande');

    $resultatContenuDemande = $this->contenuDemande->get_contenu_demande();

    return $resultatContenuDemande;
  }

}
