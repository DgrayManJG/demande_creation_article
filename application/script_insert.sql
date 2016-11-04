INSERT INTO WA_contenu_demande (gamme_produit, volume_mois, essence, profil, etat_surface, conditionnement_botte, conditionnement_palette, unite_facture, produit_spec_client, etiquette_botte, etiquette_gencod, normes_environnementales, marquage_ce)
 VALUES
 ('lambris', 150, 'essence', 'profil', 'etat_surface', 'conditionnement_botte','conditionnement_palette', 'unite_facture', 'produit_spec_client', 'etiquette_botte', 'etiquette_gencod', 'normes_environnementales', 'marquage_ce')

select id_contenu_demande from wa_contenu_demande order by id_contenu_demande DESC limit 0,1

 INSERT INTO WA_demande (demandeur, motif_demande, WA_contenu_demande_id_contenu_demande )
  VALUES
  ('jimmy','une demande de la direction', id_contenu_demande)
 /* pour la date du jour le traitement se fera coté php avec la fonction date()*/

 INSERT INTO `wa_accessoires`(`accessoire`, `WA_contenu_demande_id_contenu_demande`) VALUES ('poignée renforcé', id_contenu_demande)

 INSERT INTO `wa_couleur`(`couleur`, `WA_contenu_demande_id_contenu_demande`) VALUES ('blanc', id_contenu_demande)

 INSERT INTO `wa_dimensions`(`longueur_m`, `largeur_mm`, `epaisseur_mm`, `WA_contenu_demande_id_contenu_demande`) VALUES ('182', '170', '50', id_contenu_demande)

 INSERT INTO `wa_marque_commercial`(`marque_commercial`, `mdd`, `cnuf`, `WA_contenu_demande_id_contenu_demande`) VALUES ('CARIB', 'blabla', 'blabla', id_contenu_demande)

 INSERT INTO `wa_traitement`( `etat_traitement`, `classe_traitement`, `couleur_traitement`, `WA_contenu_demande_id_contenu_demande`) VALUES ('O', 'je sais pas', 'rose', id_contenu_demande)


 SELECT * FROM `wa_contenu_demande`
 	INNER JOIN wa_demande on wa_contenu_demande.id_contenu_demande = wa_demande.WA_contenu_demande_id_contenu_demande
     	WHERE wa_contenu_demande.id_contenu_demande


      select * from WA_sous_famille
      	INNER JOIN WA_famille on wa_sous_famille.WA_famille_id_famille = wa_famille.id_famille
          where wa_famille.id_famille = 14
