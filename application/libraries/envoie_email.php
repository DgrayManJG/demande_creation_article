<?php

class Envoie_email {

    public function send_mail($email, $demandeur, $gamme_produit, $volume_mois, $essence, $profil, $motif_demande){



  		$email->from('jimmy.guevel@groupe-isb.fr', 'Jimmy');
  		$email->to('sylvain.demaure@groupe-isb.fr');
  		//$this->email->cc('jimmy.guevel@groupe-isb.fr');

      $message = '<head>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <meta content="width=device-width">
                            <style type="text/css">
                            /* Fonts and Content */
                            body, td { font-family: Helvetica Neue, Arial, Helvetica, Geneva, sans-serif; font-size:14px; }
                            body { background-color: ; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
                            h2{ padding-top:12px; /* ne fonctionnera pas sous Outlook 2007+ */color:#0E7693; font-size:22px; }

                            </style>

                        </head>
                        <body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">

                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:rgb(42, 55, 78)" >
                                <tbody>
                                    <tr>
                                        <td align="center" bgcolor="#2A374E">
                                            <table  cellpadding="0" cellspacing="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="w640"  width="640" height="10"></td>
                                                    </tr>

                                                    <tr>
                                                        <td align="center" class="w640"  width="640" height="20"> <a style="color:#ffffff; font-size:12px;" href="#"></a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w640"  width="640" height="10"></td>
                                                    </tr>


                                                    <!-- entete -->
                                                    <tr class="pagetoplogo">
                                                        <td class="w640"  width="640">
                                                            <table  class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#F2F0F0">
                                                                <tbody>
                                                                <h1 align="center">Une demande d\'article est en cours</h1>
                                                                <h2>information sur le demandeur</h2>
                                                                <p>demandeur : "'.$demandeur.'"</p>
                                                                <p>motif de la demande : "'.$motif_demande.'"</p>
                                                                <h2>information sur l\'article</h2>
                                                                <p>libelle du produit : "'.$gamme_produit.'"</p>
                                                                <p>volume mois : "'.$volume_mois.'"</p>
                                                                <p>essence : "'.$essence.'"</p>
                                                                <p>profil : "'.$profil.'"</p>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>

                                                    <!-- separateur horizontal -->
                                                    <tr>
                                                        <td  class="w640"  width="640" height="1" bgcolor="#d7d6d6"></td>
                                                    </tr>


                                                    <!--  separateur horizontal de 15px de  haut-->
                                                    <tr>
                                                        <td class="w640"  width="640" height="15" bgcolor="#ffffff"></td>
                                                    </tr>


                                                    <tr>
                                                        <td class="w640"  width="640" height="60"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </body>
                        </html>
                        ';

  		$email->subject('demande création article');
      $email->message($message);


  		$email->send();

     }

     public function send_mail_for_new_trtmt($email, $demandeur, $motif_demande, $code_article_citis, $libelle_article_citis){

       $email->from('jimmy.guevel@groupe-isb.fr', 'Jimmy');
   		$email->to('sylvain.demaure@groupe-isb.fr');
   		$this->email->cc('jimmy.guevel@groupe-isb.fr');

       $message = '<head>
                             <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                             <meta content="width=device-width">
                             <style type="text/css">
                             /* Fonts and Content */
                             body, td { font-family: Helvetica Neue, Arial, Helvetica, Geneva, sans-serif; font-size:14px; }
                             body { background-color: ; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
                             h2{ padding-top:12px; /* ne fonctionnera pas sous Outlook 2007+ */color:#0E7693; font-size:22px; }

                             </style>

                         </head>
                         <body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">

                             <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:rgb(42, 55, 78)" >
                                 <tbody>
                                     <tr>
                                         <td align="center" bgcolor="#2A374E">
                                             <table  cellpadding="0" cellspacing="0" border="0">
                                                 <tbody>
                                                     <tr>
                                                         <td class="w640"  width="640" height="10"></td>
                                                     </tr>

                                                     <tr>
                                                         <td align="center" class="w640"  width="640" height="20"> <a style="color:#ffffff; font-size:12px;" href="#"></a> </td>
                                                     </tr>
                                                     <tr>
                                                         <td class="w640"  width="640" height="10"></td>
                                                     </tr>


                                                     <!-- entete -->
                                                     <tr class="pagetoplogo">
                                                         <td class="w640"  width="640">
                                                             <table  class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#F2F0F0">
                                                                 <tbody>
                                                                 <h1 align="center">Une demande pour un nouveau traitement est en cours</h1>
                                                                 <h2>information sur le demandeur</h2>
                                                                 <p>demandeur : "'.$demandeur.'"</p>
                                                                 <p>motif de la demande : "'.$motif_demande.'"</p>
                                                                 <h2>information sur l\'article</h2>
                                                                 <p>code_article_citis : "'.$code_article_citis.'"</p>
                                                                 <p>libelle_article_citis : "'.$libelle_article_citis.'"</p>
                                                                 </tbody>
                                                             </table>
                                                         </td>
                                                     </tr>

                                                     <!-- separateur horizontal -->
                                                     <tr>
                                                         <td  class="w640"  width="640" height="1" bgcolor="#d7d6d6"></td>
                                                     </tr>


                                                     <!--  separateur horizontal de 15px de  haut-->
                                                     <tr>
                                                         <td class="w640"  width="640" height="15" bgcolor="#ffffff"></td>
                                                     </tr>


                                                     <tr>
                                                         <td class="w640"  width="640" height="60"></td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </body>
                         </html>
                         ';

   		$email->subject('demande création article');
       $email->message($message);


   		$email->send();

      }

      public function send_mail_for_new_longueur($email, $demandeur, $motif_demande, $code_article_citis, $libelle_article_citis){

        $email->from('jimmy.guevel@groupe-isb.fr', 'Jimmy');
    		$email->to('sylvain.demaure@groupe-isb.fr');
    		$this->email->cc('jimmy.guevel@groupe-isb.fr');

        $message = '<head>
                              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                              <meta content="width=device-width">
                              <style type="text/css">
                              /* Fonts and Content */
                              body, td { font-family: Helvetica Neue, Arial, Helvetica, Geneva, sans-serif; font-size:14px; }
                              body { background-color: ; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
                              h2{ padding-top:12px; /* ne fonctionnera pas sous Outlook 2007+ */color:#0E7693; font-size:22px; }

                              </style>

                          </head>
                          <body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">

                              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:rgb(42, 55, 78)" >
                                  <tbody>
                                      <tr>
                                          <td align="center" bgcolor="#2A374E">
                                              <table  cellpadding="0" cellspacing="0" border="0">
                                                  <tbody>
                                                      <tr>
                                                          <td class="w640"  width="640" height="10"></td>
                                                      </tr>

                                                      <tr>
                                                          <td align="center" class="w640"  width="640" height="20"> <a style="color:#ffffff; font-size:12px;" href="#"></a> </td>
                                                      </tr>
                                                      <tr>
                                                          <td class="w640"  width="640" height="10"></td>
                                                      </tr>


                                                      <!-- entete -->
                                                      <tr class="pagetoplogo">
                                                          <td class="w640"  width="640">
                                                              <table  class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#F2F0F0">
                                                                  <tbody>
                                                                  <h1 align="center">Une demande pour une nouvelle longueur est en cours</h1>
                                                                  <h2>information sur le demandeur</h2>
                                                                  <p>demandeur : "'.$demandeur.'"</p>
                                                                  <p>motif de la demande : "'.$motif_demande.'"</p>
                                                                  <h2>information sur l\'article</h2>
                                                                  <p>code_article_citis : "'.$code_article_citis.'"</p>
                                                                  <p>libelle_article_citis : "'.$libelle_article_citis.'"</p>
                                                                  </tbody>
                                                              </table>
                                                          </td>
                                                      </tr>

                                                      <!-- separateur horizontal -->
                                                      <tr>
                                                          <td  class="w640"  width="640" height="1" bgcolor="#d7d6d6"></td>
                                                      </tr>


                                                      <!--  separateur horizontal de 15px de  haut-->
                                                      <tr>
                                                          <td class="w640"  width="640" height="15" bgcolor="#ffffff"></td>
                                                      </tr>


                                                      <tr>
                                                          <td class="w640"  width="640" height="60"></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </body>
                          </html>
                          ';

    		$email->subject('demande création article');
        $email->message($message);


    		$email->send();

       }
}
