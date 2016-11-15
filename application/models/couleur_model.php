<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Couleur_model extends CI_Model
{

  protected $table = "WA_couleur";

	public function get_couleur(){

	}

  public function add_couleur($couleur, $id_contenu_demande){
      //	Ces données seront automatiquement échappées
      $this->db->set('couleur',  $couleur);
      $this->db->set('WA_contenu_demande_id_contenu_demande',   $id_contenu_demande);

      //	Une fois que tous les champs ont bien été définis, on "insert" le tout
      return $this->db->insert($this->table);
  }

  public function update_couleur(){

  }

  public function delete_couleur(){

  }

  public function get_couleur_by_id_contenu_demande($idContenuDemande){
      $query = $this->db->query("SELECT * FROM ".$this->table." WHERE WA_contenu_demande_id_contenu_demande =".$this->db->escape($idContenuDemande)."");

      return $query->result();
  }

}
