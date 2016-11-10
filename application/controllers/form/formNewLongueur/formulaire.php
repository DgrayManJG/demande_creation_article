<?php

class Formulaire extends CI_Controller {

	public function index()
	{
		$this->form();
	}

	public function form()
	{
			$data['title'] = 'Creation nouvelle longueur';
			$this->load->view('header-footer/header.php', $data);
	  	$this->load->view('form/formNewLongueur/formulaire');
    	$this->load->view('header-footer/footer.php');
	}

}
