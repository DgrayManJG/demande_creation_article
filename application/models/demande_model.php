<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demande_model extends CI_Model
{

  protected $table = "WA_demande";

	public function get_demande(){

	}

  public function  add_demande($demandeur, $motif_demande, $id_contenu_demande){
      //	Ces données seront automatiquement échappées
      $this->db->set('demandeur',  $demandeur);
      $this->db->set('date_demande',  'NOW()', false);
      $this->db->set('motif_demande',  $motif_demande);
      $this->db->set('WA_contenu_demande_id_contenu_demande',   $id_contenu_demande);

      //	Une fois que tous les champs ont bien été définis, on "insert" le tout
      return $this->db->insert($this->table);
  }

  public function update_demande(){

  }

  public function delete_demande(){

  }

}
