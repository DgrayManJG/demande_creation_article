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
    $resultatNewLongueur = $this->getData();

	  $data['title'] = 'liste new longueur';
    $data['newLongueur'] = $resultatNewLongueur;
  	$this->load->view('header-footer/header_b_V4.php', $data);
  	$this->load->view('formData/dataNewLongueur/data');
  	$this->load->view('header-footer/footer.php');
	}
  public function getData()
  {
    $this->load->model('nouvelle_longueur_model', 'nouvelleLongueur');

    $resultatNewLongueur = $this->nouvelleLongueur->get_nouvelle_longueur();

    return $resultatNewLongueur;
  }

}
