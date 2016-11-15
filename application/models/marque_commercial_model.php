<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marque_commercial_model extends CI_Model
{

  protected $table = "WA_marque_commercial";

	public function get_marque_commercial(){

	}

  public function add_marque_commercial($marque_commercial, $mdd, $cnuf, $id_contenu_demande){
    //	Ces données seront automatiquement échappées
    $this->db->set('marque_commercial',  $marque_commercial);
    $this->db->set('mdd',  $mdd);
    $this->db->set('cnuf',  $cnuf);
    $this->db->set('WA_contenu_demande_id_contenu_demande',   $id_contenu_demande);

    //	Une fois que tous les champs ont bien été définis, on "insert" le tout
    return $this->db->insert($this->table);
  }

  public function update_marque_commercial(){

  }

  public function delete_marque_commercial(){

  }

  public function get_marque_commercial_by_id_contenu_demande($idContenuDemande){
      $query = $this->db->query("SELECT * FROM ".$this->table." WHERE WA_contenu_demande_id_contenu_demande =".$this->db->escape($idContenuDemande)."");

      return $query->result();
  }

}
