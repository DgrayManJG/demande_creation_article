<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_trtmt_ask_model extends CI_Model
{

  protected $table = "wa_new_trtmt_ask";

	public function get_new_trtmt_ask(){

	}

  public function add_new_trtmt_ask($last_id_insert_new_trtmt, $libelle){
    $this->db->set('libelle',  $libelle);
    $this->db->set('wa_new_trtmt_id_new_trtmt',   $last_id_insert_new_trtmt);

    //	Une fois que tous les champs ont bien été définis, on "insert" le tout
    return $this->db->insert($this->table);
  }

  public function update_new_trtmt_ask(){

  }

  public function delete_new_trtmt_ask(){

  }

  public function get_last_id_new_trtmt_ask(){
    return $this->db->select('id_new_trtmt_ask')
              ->from($this->table)
              ->order_by('id_new_trtmt_ask', 'DESC')
              ->limit('1','0')
              ->get()
              ->result();
  }

  public function get_new_trtmt_ask_by_id_new_trtmt($id_new_trtmt){
      $query = $this->db->query("SELECT * FROM ".$this->table." WHERE wa_new_trtmt_id_new_trtmt =".$this->db->escape($id_new_trtmt)."");

      return $query->result();
  }

}
