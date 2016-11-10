<?php

class Formulaire extends CI_Controller {

	public function index()
	{
		$this->form();
	}

	public function form()
	{
			$data['title'] = 'Creation nouveau traitement';
			$this->load->view('header-footer/header.php', $data);
	  	$this->load->view('form/formNewTraitement/formulaire');
    	$this->load->view('header-footer/footer.php');
	}

}
