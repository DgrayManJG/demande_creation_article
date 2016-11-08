<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sous_famille_model extends CI_Model
{

  protected $table = "WA_sous_famille";

	public function get_sous_famille(){

	}

  public function add_sous_famille(){

  }

  public function update_sous_famille(){

  }

  public function delete_sous_famille(){

  }

  public function get_libelle_by_id_famille($idFamille){
    return $this->db->select('LIBELLE')
									 ->from('WA_sous_famille')
									 ->where('WA_famille_id_famille', $idFamille)
									 ->get()
									 ->result();
  }

}
