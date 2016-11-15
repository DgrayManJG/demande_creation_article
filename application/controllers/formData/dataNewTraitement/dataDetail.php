<?php

class DataDetail extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

	public function index($num)
  {
    $id_new_trtmt = $num;

    $this->dataDetail($id_new_trtmt);
	}

	public function dataDetail($id_new_trtmt)
  {
    $this->load->model('new_trtmt_model', 'newTrtmt');
    $this->load->model('new_trtmt_ask_model', 'newTrtmtAsk');
    $this->load->model('longueur_traitement_model', 'longueurTraitement');

    $resultatNewTrtmt = $this->newTrtmt->get_new_trtmt_by_id($id_new_trtmt);
    $resultatNewTrtmtAsk = $this->newTrtmtAsk->get_new_trtmt_ask_by_id_new_trtmt($id_new_trtmt);
    $resultatLongueurTraitement = $this->longueurTraitement->get_longueur_traitement_by_id_new_trtmt($id_new_trtmt);



    $data['detailNewTrtmt'] = array($resultatNewTrtmt, $resultatNewTrtmtAsk, $resultatLongueurTraitement);
    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";
    // exit;

    $data['title'] = 'détail article "'.$id_new_trtmt.'"';
    $this->load->view('header-footer/header_b_V4.php', $data);
    $this->load->view('formData/dataNewTraitement/dataDetail');
    $this->load->view('header-footer/footer.php');

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";
	}

}
