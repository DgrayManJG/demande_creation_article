<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contenu_demande_model extends CI_Model
{

  protected $table = "WA_contenu_demande";

	public function get_contenu_demande(){
      $query = $this->db->query("SELECT * FROM WA_contenu_demande");

      return $query->result();
	}

  public function add_contenu_demande($gamme_produit, $volume_mois, $essence, $profil,
                                      $etat_surface, $conditionnement_botte, $conditionnement_palette, $libelle_famille, $libelle_sous_famille,
                                      $unite_vente, $unite_facture, $produit_spec_client, $etiquette_botte,
                                      $etiquette_gencod, $normes_environnementales, $marquage_ce)
  {
    //	Ces données seront automatiquement échappées
      $this->db->set('gamme_produit',  $gamme_produit);
      $this->db->set('volume_mois',   $volume_mois);
      $this->db->set('essence', $essence);
      $this->db->set('etat_surface',  $etat_surface);
      $this->db->set('conditionnement_botte',   $conditionnement_botte);
      $this->db->set('conditionnement_palette', $conditionnement_palette);
      $this->db->set('libelle_famille',   $libelle_famille);
      $this->db->set('libelle_sous_famille', $libelle_sous_famille);
      $this->db->set('unite_vente',  $unite_vente);
      $this->db->set('unite_facture',   $unite_facture);
      $this->db->set('produit_spec_client', $produit_spec_client);
      $this->db->set('etiquette_botte',  $etiquette_botte);
      $this->db->set('etiquette_gencod',   $etiquette_gencod);
      $this->db->set('normes_environnementales', $normes_environnementales);
      $this->db->set('marquage_ce',  $marquage_ce);


      //	Une fois que tous les champs ont bien été définis, on "insert" le tout
      return $this->db->insert($this->table);
  }

  public function update_contenu_demande(){

  }

  public function delete_contenu_demande(){

  }

  public function get_last_id_contenu_demande(){
      return $this->db->select('id_contenu_demande')
                ->from($this->table)
                ->order_by('id_contenu_demande', 'DESC')
                ->limit('1','0')
                ->get()
                ->result();
  }

  public function get_contenu_demande_by_id($idContenuDemande){
      $query = $this->db->query("SELECT * FROM WA_contenu_demande WHERE id_contenu_demande=".$this->db->escape($idContenuDemande)."");

      return $query->result();
  }

}
