<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Longueur_model extends CI_Model
{

  protected $table = "wa_longueur";

	public function get_longueur(){
	}

  public function add_longueur($last_id_insert_nouvelle_longueur, $longueur_en_m, $ref_article_client, $gencod_client){
    $this->db->set('longueur_en_m', $longueur_en_m);
    $this->db->set('ref_article_client', $ref_article_client);
    $this->db->set('gencod_client', $gencod_client);
    $this->db->set('wa_nouvelle_longueur_id_nouvelle_longueur', $last_id_insert_nouvelle_longueur);

    return $this->db->insert($this->table);
  }

  public function update_longueur(){

  }

  public function delete_longueur(){

  }

}
