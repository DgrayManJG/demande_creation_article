<?php
/**
 *
 */
class Validationform extends CI_Controller
{

  public function index()
	{
    if(isset($_POST['demandeur'])){
      $this->validation();
    } else {
      redirect('formNewLongueur', 'refresh');
    }
	}

  public function validation(){


    /*** table wa_nouvelle_longueur ***/
    $demandeur = $_POST['demandeur'];
    $motif_demande = $_POST['motif_demande'];
    $code_article_citis = $_POST['code_article_citis'];
    $libelle_article_citis = $_POST['libelle_article_citis'];

    /*** table wa_longueur ***/
    $longueur_en_m = $_POST['longueur_en_m'];
    $ref_article_client = $_POST['ref_article_client'];
    $gencod_client = $_POST['gencod_client'];

    /* instanciation des model du framework */
    $this->load->model('nouvelle_longueur_model', 'nouvelleLongueur');
    $this->load->model('longueur_model', 'longueur');

    $resultatNouvelleLongueur = $this->nouvelleLongueur->add_nouvelle_longueur($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis);
    $last_id_insert_nouvelle_longueur = $this->nouvelleLongueur->get_last_id_nouvelle_longueur();
    $last_id_insert_nouvelle_longueur = $last_id_insert_nouvelle_longueur[0]->id_nouvelle_longueur;

    $nbreLongueur = count($longueur_en_m);
    //exit;

    /* par rapport au dernier ID insérer on ajoute dans la table wa_longueur_traitement les champs */
    for ($i=0; $i < $nbreLongueur; $i++) {
      $resultatLongueur = $this->longueur->add_longueur($last_id_insert_nouvelle_longueur, $longueur_en_m[$i], $ref_article_client[$i], $gencod_client[$i]);
    }

    if($resultatNouvelleLongueur == 'true'){
      $data['alert'] = 'true';
      $data['contenu_alert'] = 'La requête d\'insertion a bien été enregistré';
      $this->send_mail($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis);
    } else {
      $data['alert'] = 'false';
      $data['contenu_alert'] = 'une erreur est survenu lors du traitement de la demande';
    }

    $data['title'] = 'Creation nouvelle longueur';
    $this->load->view('header-footer/header.php', $data);
    $this->load->view('form/formNewLongueur/formulaire', $data);
    $this->load->view('header-footer/footer.php');

	}

  public function send_mail($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis){
    $config = Array(
                    'protocol' => 'mail',
                    'mail_host' => 'ExchangeISB.isb.groupe-isb.fr',
                    'mail_port' => 25001,
                    'mail_user' => '',
                    'mail_pass' => '',
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'wrapchars' => 76,
                    'newline'   => '\r\n'
                );
    $this->load->library('email', $config);
    $email = $this->email;


    $this->load->library('envoie_email');

    $this->envoie_email->send_mail_for_new_longueur($email, $demandeur, $motif_demande, $code_article_citis, $libelle_article_citis);
	}



}
