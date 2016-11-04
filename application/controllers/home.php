<?php

class Home extends CI_Controller
{
	public function index()
	{
		$this->accueil();
	}

	public function accueil(){
		$this->load->view('header-footer/header.php');
		$this->load->view('home');
		$this->load->view('header-footer/footer.php');
	}
}
