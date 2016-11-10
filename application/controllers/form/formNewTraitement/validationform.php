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
      redirect('formNewTraitement', 'refresh');
    }
	}

  public function validation(){

    /*** table wa_new_trtmt ***/
    $demandeur = $_POST['demandeur'];
    $motif_demande = $_POST['motif_demande'];
    $code_article_citis = $_POST['code_article_citis'];
    $libelle_article_citis = $_POST['libelle_article_citis'];

    /*** table wa_new_trtmt_ask ***/
    $libelle = $_POST['libelle'];
    $libelle2 = $_POST['libelle2'];
    $libelle3 = $_POST['libelle3'];

    /*** table wa_longueur_traitement
    dans le formulaire on peu avoir plusieurs nouveau traitement demande
    et donc plusieurs champs (ex: longueur_en_m) pour 1 nouveau traitement demande ***/
    $longueur_en_m = $_POST['longueur_en_m'];
    $ref_article_client = $_POST['ref_article_client'];
    $gencod_client = $_POST['gencod_client'];

    $longueur_en_m2 = $_POST['longueur_en_m2'];
    $ref_article_client2 = $_POST['ref_article_client2'];
    $gencod_client2 = $_POST['gencod_client2'];

    $longueur_en_m3 = $_POST['longueur_en_m3'];
    $ref_article_client3 = $_POST['ref_article_client3'];
    $gencod_client3 = $_POST['gencod_client3'];


    /* instanciation des model du framework */
    $this->load->model('new_trtmt_model', 'newTrtmt');
    $this->load->model('new_trtmt_ask_model', 'newTrtmtAsk');
    $this->load->model('Longueur_traitement_model', 'longueurTraitement');

    /* on ajoute les élément à la table wa_new_trtmt et on récupére l'id qui viens d'être insérer */
    $resultatNewTrtmt = $this->newTrtmt->add_new_trtmt($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis);
    $last_id_insert_new_trtmt = $this->newTrtmt->get_last_id_new_trtmt();
    $last_id_insert_new_trtmt = $last_id_insert_new_trtmt[0]->id_new_trtmt;

    /* on ajoute les éléments dans la table wa_new_trtmt_ask, on ajout le champ qui est obligatoire dans le formulaire
       et on récupére le dernier ID insérer */
    $resultatNewTrtmtAsk = $this->newTrtmtAsk->add_new_trtmt_ask($last_id_insert_new_trtmt, $libelle);
    $last_id_insert_new_trtmt_ask = $this->newTrtmtAsk->get_last_id_new_trtmt_ask();
    $last_id_insert_new_trtmt_ask = $last_id_insert_new_trtmt_ask[0]->id_new_trtmt_ask;

    $nbreLongueur = count($longueur_en_m);
    //exit;

    /* par rapport au dernier ID insérer on ajoute dans la table wa_longueur_traitement les champs */
    for ($i=0; $i < $nbreLongueur; $i++) {
      $resultatLongueurTraitement = $this->longueurTraitement->add_longueur_traitement($last_id_insert_new_trtmt, $last_id_insert_new_trtmt_ask, $longueur_en_m[$i], $ref_article_client[$i], $gencod_client[$i]);
    }

    /** si un deuxieme champs nouveau traitement demande est remplit on procéde de la même maniére */
    if(!empty($libelle2)){
      $resultatNewTrtmtAsk2 = $this->newTrtmtAsk->add_new_trtmt_ask($last_id_insert_new_trtmt, $libelle2);
      $last_id_insert_new_trtmt_ask2 = $this->newTrtmtAsk->get_last_id_new_trtmt_ask();

      $last_id_insert_new_trtmt_ask2 = $last_id_insert_new_trtmt_ask2[0]->id_new_trtmt_ask;

      $nbreLongueur2 = count($longueur_en_m2);

      for ($i=0; $i < $nbreLongueur2; $i++) {
        $resultatLongueurTraitement2 = $this->longueurTraitement->add_longueur_traitement($last_id_insert_new_trtmt, $last_id_insert_new_trtmt_ask2, $longueur_en_m2[$i], $ref_article_client2[$i], $gencod_client2[$i]);
      }
    }

    /** si un troisieme champs nouveau traitement demande est remplit on procéde de la même maniére */
    if(!empty($libelle3)){
      $resultatNewTrtmtAsk3 = $this->newTrtmtAsk->add_new_trtmt_ask($last_id_insert_new_trtmt, $libelle3);
      $last_id_insert_new_trtmt_ask3 = $this->newTrtmtAsk->get_last_id_new_trtmt_ask();

      $last_id_insert_new_trtmt_ask3 = $last_id_insert_new_trtmt_ask3[0]->id_new_trtmt_ask;

      $nbreLongueur3 = count($longueur_en_m3);

      for ($i=0; $i < $nbreLongueur3; $i++) {
        $resultatLongueurTraitement3 = $this->longueurTraitement->add_longueur_traitement($last_id_insert_new_trtmt, $last_id_insert_new_trtmt_ask3, $longueur_en_m3[$i], $ref_article_client3[$i], $gencod_client3[$i]);
      }
    }

    if($resultatNewTrtmt == 'true'){
      $data['alert'] = 'true';
      $data['contenu_alert'] = 'La requête d\'insertion a bien été enregistré';
      $this->send_mail($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis);
    } else {
      $data['alert'] = 'false';
      $data['contenu_alert'] = 'une erreur est survenu lors du traitement de la demande';
    }

    $data['title'] = 'Creation nouveau traitement';
    $this->load->view('header-footer/header.php', $data);
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

    $this->envoie_email->send_mail_for_new_trtmt($email, $demandeur, $motif_demande, $code_article_citis, $libelle_article_citis);
	}



}
