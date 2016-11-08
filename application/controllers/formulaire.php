<?php

class Formulaire extends CI_Controller {

	public function index()
	{
		$this->form();
	}

	public function form()
	{
    	$this->load->view('header-footer/header.php');
	  	$this->load->view('formulaireArticle/formulaireArticle');
    	$this->load->view('header-footer/footer.php');
	}

	public function getProduit()
	{

		$this->load->model('famille_model', 'famille');
		$resultat = $this->famille->get_famille();
		$json = array();

		$cpt = 1;

		foreach($resultat as $row){
				 $json['LIBELLE_FAMILLE'][$cpt] = $row->LIBELLE;
				 $cpt = $cpt + 1;
		}

		$json = $json['LIBELLE_FAMILLE'];

		echo json_encode($json);
	}

	public function getSousProduit()
	{

		$this->load->model('famille_model', 'famille');
		$this->load->model('sous_famille_model', 'sous_famille');

		$resultatIdFamille = $this->famille->get_idFamille_by_libelle($_GET['LIBELLE']);
		$resultatLibelleSousFamille = $this->sous_famille->get_libelle_by_id_famille($resultatIdFamille[0]->id_famille);
		$json = array();
		$cpt = 1;

		foreach($resultatLibelleSousFamille as $row){
				 $json['SOUS_FAMILLE_LIBELLE'][$cpt] = $row->LIBELLE;
				 $cpt = $cpt + 1;
		}

		$json = $json['SOUS_FAMILLE_LIBELLE'];

		echo json_encode($json);
	}



}
