<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Longueur_traitement_model extends CI_Model
{

  protected $table = "wa_longueur_traitement";

	public function get_longueur_traitement(){

	}

  public function add_longueur_traitement($last_id_insert_new_trtmt, $last_id_insert_new_trtmt_ask, $longueur_en_m, $ref_article_client, $gencod_client){
    $this->db->set('longueur_en_m',  $longueur_en_m);
    $this->db->set('ref_article_client',  $ref_article_client);
    $this->db->set('gencod_client',  $gencod_client);
    $this->db->set('wa_new_trtmt_ask_id_new_trtmt_ask',   $last_id_insert_new_trtmt_ask);
    $this->db->set('wa_new_trtmt_ask_wa_new_trtmt_id_new_trtmt',  $last_id_insert_new_trtmt);

    //	Une fois que tous les champs ont bien été définis, on "insert" le tout
    return $this->db->insert($this->table);
  }

  public function update_longueur_traitement(){

  }

  public function delete_longueur_traitement(){

  }

  public function get_longueur_traitement_by_id_new_trtmt($id_new_trtmt){
      $query = $this->db->query("SELECT * FROM ".$this->table." WHERE wa_new_trtmt_ask_wa_new_trtmt_id_new_trtmt =".$this->db->escape($id_new_trtmt)."");

      return $query->result();
  }

}
