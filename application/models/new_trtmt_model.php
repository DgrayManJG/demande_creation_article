<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_trtmt_model extends CI_Model
{

  protected $table = "wa_new_trtmt";

	public function get_new_trtmt(){
    $query = $this->db->query("SELECT * FROM wa_new_trtmt");

    return $query->result();
	}

  public function add_new_trtmt($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis){

    $this->db->set('demandeur',  $demandeur);
    $this->db->set('motif_demande',   $motif_demande);
    $this->db->set('date_demande',  'NOW()', false);
    $this->db->set('code_article_citis', $code_article_citis);
    $this->db->set('libelle_article_citis',  $libelle_article_citis);

    return $this->db->insert($this->table);
  }

  public function update_new_trtmt(){

  }

  public function delete_new_trtmt(){

  }

  public function get_last_id_new_trtmt(){
    return $this->db->select('id_new_trtmt')
              ->from($this->table)
              ->order_by('id_new_trtmt', 'DESC')
              ->limit('1','0')
              ->get()
              ->result();
  }

  public function get_new_trtmt_by_id($id_new_trtmt){
      $query = $this->db->query("SELECT * FROM wa_new_trtmt WHERE id_new_trtmt=".$this->db->escape($id_new_trtmt)."");

      return $query->result();
  }

}
