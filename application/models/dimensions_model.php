<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dimensions_model extends CI_Model
{

  protected $table = "WA_dimensions";

	public function get_dimensions(){

	}

  public function add_dimensions($longueur_m, $largeur_mm, $epaisseur_mm, $id_contenu_demande){
    //	Ces données seront automatiquement échappées
    $this->db->set('longueur_m',  $longueur_m);
    $this->db->set('largeur_mm',  $largeur_mm);
    $this->db->set('epaisseur_mm',  $epaisseur_mm);
    $this->db->set('WA_contenu_demande_id_contenu_demande',   $id_contenu_demande);

    //	Une fois que tous les champs ont bien été définis, on "insert" le tout
    return $this->db->insert($this->table);
  }

  public function update_dimensions(){

  }

  public function delete_dimensions(){

  }

}
