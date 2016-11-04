<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Traitement_model extends CI_Model
{

  protected $table = "WA_traitement";

	public function get_traitement(){

	}

  public function add_traitement($etat_traitement, $classe_traitement, $couleur_traitement, $id_contenu_demande){
    //	Ces données seront automatiquement échappées
    $this->db->set('etat_traitement',  $etat_traitement);
    $this->db->set('classe_traitement',  $classe_traitement);
    $this->db->set('couleur_traitement',  $couleur_traitement);
    $this->db->set('WA_contenu_demande_id_contenu_demande',   $id_contenu_demande);

    //	Une fois que tous les champs ont bien été définis, on "insert" le tout
    return $this->db->insert($this->table);
  }

  public function update_traitement(){

  }

  public function delete_traitement(){

  }

}
