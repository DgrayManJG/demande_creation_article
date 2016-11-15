<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nouvelle_longueur_model extends CI_Model
{

  protected $table = "wa_nouvelle_longueur";

	public function get_nouvelle_longueur(){
    $query = $this->db->query("SELECT * FROM wa_nouvelle_longueur");

    return $query->result();
	}

  public function add_nouvelle_longueur($demandeur, $motif_demande, $code_article_citis, $libelle_article_citis){

    $this->db->set('demandeur',  $demandeur);
    $this->db->set('motif_demande',   $motif_demande);
    $this->db->set('date_demande',  'NOW()', false);
    $this->db->set('code_article_citis', $code_article_citis);
    $this->db->set('libelle_article_citis',  $libelle_article_citis);

    return $this->db->insert($this->table);
  }

  public function update_nouvelle_longueurt(){

  }

  public function delete_nouvelle_longueur(){

  }

  public function get_last_id_nouvelle_longueur(){
    return $this->db->select('id_nouvelle_longueur')
              ->from($this->table)
              ->order_by('id_nouvelle_longueur', 'DESC')
              ->limit('1','0')
              ->get()
              ->result();
  }

  public function get_nouvelle_longueur_by_id($id_nouvelle_longueur){
      $query = $this->db->query("SELECT * FROM wa_nouvelle_longueur WHERE id_nouvelle_longueur=".$this->db->escape($id_nouvelle_longueur)."");

      return $query->result();
  }

}
