<?php

class DataDetail extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

	public function index($num)
  {
    $id_nouvelle_longueur = $num;

    $this->dataDetail($id_nouvelle_longueur);
	}

	public function dataDetail($id_nouvelle_longueur)
  {
    $this->load->model('nouvelle_longueur_model', 'nouvelleLongueur');
    $this->load->model('longueur_model', 'longueur');

    $resultatNouvelleLongueur = $this->nouvelleLongueur->get_nouvelle_longueur_by_id($id_nouvelle_longueur);
    $resultatLongueur = $this->longueur->get_longueur_by_id_nouvelle_longueur($id_nouvelle_longueur);

    $data['detailNouvelleLongueur'] = array($resultatNouvelleLongueur, $resultatLongueur);
    $data['title'] = 'détail article "'.$id_nouvelle_longueur.'"';
    $this->load->view('header-footer/header_b_V4.php', $data);
    $this->load->view('formData/dataNewLongueur/dataDetail');
    $this->load->view('header-footer/footer.php');

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";
	}

}
