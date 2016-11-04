<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accessoires_model extends CI_Model
{

  protected $table = "WA_accessoires";

	public function get_accessoires(){

	}

  public function add_accessoires($accessoire, $id_contenu_demande){
      //	Ces données seront automatiquement échappées
      $this->db->set('accessoire',  $accessoire);
      $this->db->set('WA_contenu_demande_id_contenu_demande',   $id_contenu_demande);

      //	Une fois que tous les champs ont bien été définis, on "insert" le tout
      return $this->db->insert($this->table);
  }

  public function update_accessoires(){

  }

  public function delete_accessoires(){

  }

}
