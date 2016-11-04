<?php

class Formulaire extends CI_Controller {

	public function index()
	{
		$this->form();
	}

	public function form()
	{

		/******** SELECT sur la table famille **********/
		$resultat = $this->db->select('*')
									 ->from('WA_famille')
									 ->get()
									 ->result();

			$famille = array();
			$cpt = 1;

			foreach($resultat as $row){
					 $famille['FAMILLE_LIBELLE'][$row->id_famille] = $row->LIBELLE;
					 $famille['FAMILLE_ID'][$row->id_famille] = $row->id_famille;
					 $cpt = $cpt + 1;
			}

			/************** SELECT sur la table sous famille **************/

			$resultat2 = $this->db->select('*')
										 ->from('WA_sous_famille')
										 ->get()
										 ->result();

				$sous_famille = array();
				$cpt2 = 1;

				foreach($resultat2 as $row2){
						 $sous_famille['SOUS_FAMILLE_LIBELLE'][$cpt2] = $row2->LIBELLE;
						 $cpt2 = $cpt2 + 1;
				}

			/*	$data = array();
				$data['famille'] = $famille;
				$data['sous_famille'] = $sous_famille;*/
				echo '<pre>';
				//var_dump($famille);
				echo '</pre>';


    	$this->load->view('header-footer/header.php');
	  	$this->load->view('formulaireArticle/formulaireArticle', $famille);
    	$this->load->view('header-footer/footer.php');
	}

	public function passage_variable()
	{
			$data = array();
			$data['pseudo'] = 'Arthur';
			$data['email'] = 'email@ndd.fr';
			$data['en_ligne'] = true;

			$this->load->view('vue', $data);
	}

	public function getSousProduit(){

		$this->load->view('home');
		// $resultat2 = $this->db->select('*')
		// 							 ->from('WA_sous_famille')
		// 							 ->where()
		// 							 ->get()
		// 							 ->result();
		//
		// 	$sous_famille = array();
		// 	$cpt2 = 1;
		//
		// 	foreach($resultat2 as $row2){
		// 			 $sous_famille['SOUS_FAMILLE_LIBELLE'][$cpt2] = $row2->LIBELLE;
		// 			 $cpt2 = $cpt2 + 1;
		// 	}

	}



}
