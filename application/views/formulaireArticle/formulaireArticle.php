<div class="container">
   <div class="page-header">
      <h1>Formulaire creation article</h1>
    </div>
  </div>


<div class="container">
  <!-- Name Section -->
    <div class="row">
        <div class="col-md-8 col-md-offset-1">


          <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('validationform'); ?>">
            <fieldset>

              <!-- Form Name -->

              <!-- Text input-->
              <div class="form-group">
                <legend>Information sur le demandeur</legend>
                  <div class="col-sm-4">
                    <input type="text" name="demandeur" id="demandeur" placeholder="demandeur" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="motif_demande" id="motif_demande" placeholder="motif_demande" class="form-control">
                  </div>
              </div>


              <div class="form-group">
                <legend>produit détails</legend>
                  <div class="col-sm-4">
                    <input type="text" id="gamme_produit" name="gamme_produit" placeholder="gamme_produit" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="volume_mois" name="volume_mois" placeholder="volume_mois" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="essence" name="essence" placeholder="essence" class="form-control">
                  </div>
              </div>

              <div class="form-group">
                <div class="col-sm-4">
                  <input type="text" id="profil" name="profil" placeholder="profil" class="form-control">
                </div>
                <div class="col-sm-4">
                  <input type="text" id="etat_surface" name="etat_surface" placeholder="etat_surface" class="form-control">
                </div>

              </div>



                <div class="form-group">
                  <legend>conditionnement_botte</legend>
                   <div class="col-md-9">
                       <label class="radio-inline">
                           <input type="radio" name="conditionnement_botte_radio" id="" value="oui" class="validate required radio">
                           Oui
                       </label>
                       <label class="radio-inline">
                           <input type="radio" name="conditionnement_botte_radio" id="" value="non" class="validate required radio" checked="true">
                           Non
                       </label>
                       <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                   </div>
                   <div class="col-sm-4">
                     <input type="text" id="conditionnement_botte" name="conditionnement_botte" placeholder="si oui, précissez" class="form-control">
                   </div>
               </div>


                  <script type="text/javascript">
                    $('#conditionnement_botte').hide();
                    $("input[name='conditionnement_botte_radio']").change(function() {

                            var value = $(this).val();
                            var conditionnement = $('#conditionnement_botte');

                            if (value=="oui") {
                              conditionnement.show();
                            } else {
                              conditionnement.hide();
                            }
                    });
                      </script>

                      <!-- conditionnement palette -->

                      <div class="form-group">
                        <legend>conditionnement_palette</legend>
                         <div class="col-md-9">
                             <label class="radio-inline">
                                 <input type="radio" name="conditionnement_palette_radio" id="" value="oui" class="validate required radio">
                                 Oui
                             </label>
                             <label class="radio-inline">
                                 <input type="radio" name="conditionnement_palette_radio" id="" value="non" class="validate required radio" checked="true">
                                 Non
                             </label>
                             <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                         </div>
                         <div class="col-sm-4">
                           <input type="text" id="conditionnement_palette" name="conditionnement_palette" placeholder="si oui, précissez" class="form-control">
                         </div>
                     </div>


                        <script type="text/javascript">
                          $('#conditionnement_palette').hide();
                          $("input[name='conditionnement_palette_radio']").change(function() {

                                  var value = $(this).val();
                                  var conditionnement = $('#conditionnement_palette');

                                  if (value=="oui") {
                                    conditionnement.show();
                                  } else {
                                    conditionnement.hide();
                                  }
                          });
                            </script>


                            <?php
                            // echo '<pre>';
                            // var_dump($FAMILLE_LIBELLE);
                            // echo '</pre>';
                            ?>

                            <?php
                            // echo '<pre>';
                            // var_dump($FAMILLE_ID);
                            // echo '</pre>';
                            ?>


              <div class="form-group">
                <legend>famille cities</legend>
                <div class="col-sm-4">
                  <select type="pContactMethod" id="libelle_famille" name="libelle_famille" placeholder="Contact Method" class="form-control">
                      <?php foreach ($FAMILLE_LIBELLE as $row_famille_libelle):?>

                        <option value="<?php echo $row_famille_libelle; ?>"><?php echo $row_famille_libelle;?></option>

                      <?php endforeach;?>
                  </select>
                </div>
              </div>




                <!-- <div class="libelle_sous_famille2">
                  <div class="form-group">
                      <legend>sous_famille cities</legend>
                      <div class="col-sm-4">
                        <select type="pContactMethod" id="libelle_sous_famille" name="libelle_sous_famille" placeholder="Contact Method" class="form-control">
                          <option value="null"></option>
                              <?php

                              // foreach ($arraySite as $nomSite) {
                              //   echo "\t", '<option value="', $nomSite["nom_magasin"], '">', $nomSite["nom_magasin"], '</option>', "\n";
                              //}
                              ?>
                        </select>
                      </div>
                    </div>
                </div> -->


            <div class="form-group row">
              <label for="site" class="col-xs-2 col-form-label">Site : </label>
              <div class="row">
                <div class="col-xs-4">
                  <select name="site" id="site" class="form-control">

      						</select>
	                </div>
	              </div>
	            </div>

                <script type="text/javascript">
                
                  $('#libelle_sous_famille2').hide();
                  $("select[name='libelle_famille']").change(function() {

                          var value = $(this).val();

                          alert(value);

                          $.ajax({
                              url: 'sousFamille.php',
                              data:'LIBELLE='+ value,
                              dataType: 'json',
                              success: function(json) {
                              	$('#site').append('<option value="null"></option>');
                              	$.each(json, function(index, value) {
                                  	$('#site').append('<option value="'+ index +'">'+ value +'</option>');
                                  });
                              }
                          });
                  });

                    </script>


              <!--<div class="form-group">
                <div class="col-sm-4">
                  <input type="text" name="city" placeholder="City" class="form-control">
                </div>
                <div class="col-sm-2">
                  <input type="text" name="state" placeholder="State" class="form-control">
                </div>
                <div class="col-sm-4">
                  <input type="text" name="postalCode" placeholder="Post Code" class="form-control">
                </div>
              </div>-->



              <div class="form-group">
                <legend>dimensions produits</legend>
                  <div class="col-sm-4">
                    <input type="text" id="longueur_m" name="longueur_m" placeholder="longueur_m" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="largeur_mm" name="largeur_mm" placeholder="largeur_mm" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="epaisseur_mm" name="epaisseur_mm" placeholder="epaisseur_mm" class="form-control">
                  </div>
              </div>



              <div class="form-group">
                <legend>traitement</legend>
                  <div class="col-sm-4">
                    <input type="text" id="etat_traitement" name="etat_traitement" placeholder="etat_traitement" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="classe_traitement" name="classe_traitement" placeholder="classe_traitement" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="couleur_traitement" name="couleur_traitement" placeholder="couleur_traitement" class="form-control">
                  </div>
              </div>



              <div class="form-group">
                <legend>couleur souhaité</legend>
                  <div class="col-sm-4">
                    <input type="text" id="couleur" name="couleur" placeholder="couleur" class="form-control">
                  </div>
              </div>



              <!-- Text input-->
              <div class="form-group">
                <legend>unité vente & facture</legend>
                  <div class="col-sm-4">
                    <input type="text" id="unite_vente" name="unite_vente" placeholder="unite_vente" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="unite_facture" name="unite_facture" placeholder="unite_facture" class="form-control">
                  </div>
              </div>



              <div class="form-group">
                <legend>marque commerciale</legend>
                  <div class="col-sm-4">
                    <select type="pContactMethod" id="marque_commercial" name="marque_commercial" placeholder="Contact Method" class="form-control">
                      <option>marque commerciale</option>
                      <option value="CARIB">CARIB</option>
                      <option value="SINBPLA">SINBPLA</option>
                      <option value="SILVERWOOD">SILVERWOOD</option>
                      <option value="NEUTRE">NEUTRE</option>
                      <option value="MDD">MDD</option>
                    </select>
                  </div>
                  <div id="mdd_hide">
                    <div class="col-sm-4">
                      <input type="text" id="mdd" name="mdd" placeholder="laquelles" class="form-control">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" id="cnuf" name="cnuf" placeholder="Sous quel Cnuf(GSB)" class="form-control">
                    </div>
                  </div>
               </div>


               <script type="text/javascript">
                 $('#mdd_hide').hide();
                 $("select[name='marque_commercial']").change(function() {

                         var value = $(this).val();
                         var conditionnement = $('#mdd_hide');

                         if (value=="MDD") {
                           conditionnement.show();
                         } else {
                           conditionnement.hide();
                         }
                 });
                   </script>


               <div class="form-group">
                 <legend>produit spécifique pour un client</legend>
                  <div class="col-md-9">
                      <label class="radio-inline">
                          <input type="radio" name="produit_spec_client_radio" id="" value="oui" class="validate required radio">
                          Oui
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name="produit_spec_client_radio" id="" value="non" class="validate required radio" checked="true">
                          Non
                      </label>
                      <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" id="produit_spec_client" name="produit_spec_client" placeholder="si oui, précissez" class="form-control">
                  </div>
              </div>


                 <script type="text/javascript">
                   $('#produit_spec_client').hide();
                   $("input[name='produit_spec_client_radio']").change(function() {

                           var value = $(this).val();
                           var conditionnement = $('#produit_spec_client');

                           if (value=="oui") {
                             conditionnement.show();
                           } else {
                             conditionnement.hide();
                           }
                   });
                     </script>


                     <div class="form-group">
                       <legend>etiquette botte souhaité</legend>
                        <div class="col-md-9">
                            <label class="radio-inline">
                                <input type="radio" name="etiquette_botte_radio" id="" value="oui" class="validate required radio">
                                Oui
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="etiquette_botte_radio" id="" value="non" class="validate required radio" checked="true">
                                Non
                            </label>
                            <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                        </div>
                        <div class="col-sm-4">
                          <select type="pContactMethod" id="etiquette_botte" name="etiquette_botte" placeholder="Contact Method" class="form-control">
                            <option>quelle étiquette</option>
                            <option value="MDD">MDD</option>
                            <option value="CARIB">CARIB</option>
                            <option value="SILVERWOOD">SILVERWOOD</option>
                            <option value="NEUTRE">NEUTRE</option>
                          </select>
                        </div>
                    </div>


                       <script type="text/javascript">
                         $('#etiquette_botte').hide();
                         $("input[name='etiquette_botte_radio']").change(function() {

                                 var value = $(this).val();
                                 var conditionnement = $('#etiquette_botte');

                                 if (value=="oui") {
                                   conditionnement.show();
                                 } else {
                                   conditionnement.hide();
                                 }
                         });
                           </script>

<!-- ETIQUETTE GENCODE ----------------------------------------------------------------------------------------------------------------->

                           <div class="form-group">
                             <legend>etiquette GENCOD souhaité</legend>
                              <div class="col-md-9">
                                  <label class="radio-inline">
                                      <input type="radio" name="etiquette_gencod_radio" id="" value="oui" class="validate required radio">
                                      Oui
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="etiquette_gencod_radio" id="" value="non" class="validate required radio" checked="true">
                                      Non
                                  </label>
                              </div>

                              <div class="col-md-9" id="etiquette_gencod_hide">

                                  <label class="radio-inline">
                                      <input type="radio" name="etiquette_gencod_pricisé" id="etiquette_gencod" value="libres" class="validate required radio">
                                      libres
                                  </label>

                                  <label class="radio-inline">
                                      <input type="radio" id="etiquette_gencod" name="etiquette_gencod_pricisé" value="imposé par l'enseigne" class="validate required radio">
                                      imposé par l'enseigne
                                  </label>
                                <p>
                                  <!-- faire espace -->
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <input type="text" id="etiquette_gencod_text" name="etiquette_gencod_text" placeholder="précissez" class="form-control">
                              </div>
                          </div>


                             <script type="text/javascript">
                               $('#etiquette_gencod_hide').hide();
                               $("input[name='etiquette_gencod_radio']").change(function() {

                                       var value = $(this).val();
                                       var conditionnement = $('#etiquette_gencod_hide');

                                       if (value=="oui") {
                                         conditionnement.show();
                                       } else {
                                         conditionnement.hide();
                                       }
                               });

                              $('#etiquette_gencod_text').hide();

                              $("input[name='etiquette_gencod_pricisé']").change(function() {

                                      var value = $(this).val();
                                      var conditionnement = $('#etiquette_gencod_text');

                                      if (value=="imposé par l'enseigne") {
                                        conditionnement.show();
                                      } else {
                                        conditionnement.hide();
                                      }
                              });
                           </script>

<!---------------------------------------------------------------------------------------------------------------------------------------------->

            <div class="form-group">
              <legend>Accessoires souhaités</legend>
              <div class="col-sm-4">
                <input type="text" id="accessoire" name="accessoire" placeholder="accessoire" class="form-control">
            </div>

              <div class="form-group"></br></br>

                <legend>Normes environnementales</legend>
                 <div class="col-md-9">
                     <label class="radio-inline">
                         <input type="radio" name="normes_environnementales" id="normes_environnementales" value="FSC IMPOSÉ" class="validate required radio">
                         FSC IMPOSÉ
                     </label>
                     <label class="radio-inline">
                         <input type="radio" name="normes_environnementales" id="normes_environnementales" value="PEFC IMPOSÉ" class="validate required radio" checked="true">
                         PEFC IMPOSÉ
                     </label>
                     <label class="radio-inline">
                         <input type="radio" name="normes_environnementales" id="normes_environnementales" value="PEFC ou FSC selon dispo" class="validate required radio" checked="true">
                         PEFC IMPOSÉ
                     </label>
                 </div>
             </div>


             <div class="form-group">
               <legend>Marquage CE</legend>
                <div class="col-md-9">
                    <label class="radio-inline">
                        <input type="radio" name="marquage_ce" id="marquage_ce" value="oui" class="validate required radio">
                        Oui
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="marquage_ce" id="marquage_ce" value="non" class="validate required radio" checked="true">
                        Non
                    </label>
                </div>
            </div>


              <br>
              <div class="form-group">
                <div class="col-sm-5 col-sm-offset-1">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary">envoyé</button>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>

        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->

</div>
