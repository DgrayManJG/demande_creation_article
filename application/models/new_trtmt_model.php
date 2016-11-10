<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_trtmt_model extends CI_Model
{

  protected $table = "wa_new_trtmt";

	public function get_new_trtmt(){

	}

  public function add_new_trtmt($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis){

    $this->db->set('demandeur',  $demandeur);
    $this->db->set('motif_demande',   $motif_demande);
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

}
