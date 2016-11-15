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
    $resultatNewTraitement = $this->getData();

	  $data['title'] = 'liste new longueur';
    $data['newTraitement'] = $resultatNewTraitement;
  	$this->load->view('header-footer/header_b_V4.php', $data);
  	$this->load->view('formData/dataNewTraitement/data');
  	$this->load->view('header-footer/footer.php');
	}
  public function getData()
  {
    $this->load->model('new_trtmt_model', 'newTrtmt');

    $resultatNewTraitement = $this->newTrtmt->get_new_trtmt();

    return $resultatNewTraitement;
  }

}
