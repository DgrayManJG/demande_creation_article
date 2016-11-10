<?php
class Test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//	Décommenter cette ligne pour charger le helper url
		//$this->load->helper('url');
	  // $session_id 							= $this->session->userdata('session_id');
		// $adresse_ip               = $this->session->userdata('ip_address');
		// $user_agent_du_navigateur = $this->session->userdata('user_agent');
		// $derniere_visite          = $this->session->userdata('last_activity');
		// var_dump($adresse_ip);
	}

	public function index()
	{
		//redirect(array('error', 'probleme'));
    //$this->librairie_alphabet();
		redirect('blog', 'refresh');

	}

	public function librairie_alphabet()
	{
		$data = array();

		//	Chargement de notre bibliothèque Alphabet via la bibliothèque Load
		$this->load->library('alphabet');

		//	Appel de la méthode Alphabet::recuperer_alphabet
		$data['defaut_alphabet'] = $this->alphabet->recuperer_alphabet();

		//	Appel de la méthode Alphabet::supprimer_alphabet
		$this->alphabet->supprimer_alphabet();

		//	Appel de la méthode Alphabet::changer_alphabet
		$data['alphabet'] = 'acegikmoqsuwybdfhjlnprtvxz';
		$this->alphabet->changer_alphabet($data['alphabet']);

		var_dump($data['alphabet']);

		//	Appel de la méthode Load::view
	//	$this->load->view('test/accueil', $data);
	}

	public function exemple1()
	{
		$data = array();
		$data['pseudo'] = 'Arthur';
		$data['email'] = 'email@ndd.fr';
		$data['en_ligne'] = true;

		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('vue', $data);
		//cotée vue les variable seront : $pesudo, $email, $en_ligne
	}

	public function session()
	{

	}

	public function exemple_database(){

		$resultat = $this->db->select('*')
									 ->from('wa_couleur')
									 ->where('wa_couleur.id_couleur','1')
									 ->limit(1)
									 ->get()
									 ->result();
			echo '<pre>';
			var_dump($resultat);
			echo '</pre>';


			/******* autre façon de faire *******/

				//	Mise en place de notre requête
				$sql = "SELECT	*
					FROM	`wa_couleur`
					WHERE	`id_couleur` = ?
					LIMIT	0,1
						 ;";

				// Les valeurs seront automatiquement échappées
				$data = array('1');

				//	On lance la requête
				$query = $this->db->query($sql, $data);



				//	On récupère le nombre de résultats
				$nb_resultat = $query->num_rows();

				//	On parcourt l'ensemble des résultats
				foreach($query->result() as $ligne)
				{
					echo $ligne->id_couleur;
					echo $ligne->couleur;
				}

				//	On libère la mémoire de la requête (fortement conseillé pour lancer une seconde requête)
				$query->free_result();
	}

	public function get_model(){
		$this->load->model('article_model', 'article');

		$data = array();

		//	On lance une requête
		$data['user_info'] = $this->article->get_demande();

		var_dump($data['user_info']);
		//	On inclut une vue
		//$this->layout->view('ma_vue', $data);
	}



}
