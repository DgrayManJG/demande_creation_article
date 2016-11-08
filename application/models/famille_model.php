<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Famille_model extends CI_Model
{

  protected $table = "WA_famille";

	public function get_famille(){
    return $this->db->select('*')
                 ->from('WA_famille')
                 ->get()
                 ->result();
	}

  public function add_famille(){

  }

  public function update_famille(){

  }

  public function delete_famille(){

  }

  public function get_idFamille_by_libelle($libelle){
      return $this->db->select('id_famille')
    									->from('WA_famille')
    									->where('LIBELLE', $libelle)
    									->get()
    									->result();
  }


}
