<?php
  if(isset($alert)){
    if($alert = 'true'){
      echo '<div class="alert alert-success">
              <strong>Sucess!</strong> "'.$contenu_alert.'".
            </div>';
    } else {
      echo '<div class="alert alert-danger">
              <strong>Danger!</strong> "'.$contenu_alert.'".
            </div>';
    }
  }
 ?>

  <div class="container">
   <div class="page-header">
     <h1>Demande de creation d'une nouvelle longueur</h1>
     <h3>Super famille Rabotés ou Sciés</h3>
    </div>
  </div>

<div class="container">
  <!-- Name Section -->
    <div class="row">
        <div class="col-md-8 col-md-offset-1">

          <div class="form-group">
            <div class="alert alert-warning">
              A compléter par le demandeur - sous reserve de validation marketing avant creation.
            </div>
            <div class="alert alert-warning">
              A partir d'un article existant sur CITIS, cette demande permet de créer une nouvelle longueur. Le champ code article est obligatoire ainsi que la ou les longueurs demandées. Le code article doit être sur 6 caractères.
            </div>
          </div>

          <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('validationNewLongueur'); ?>">
            <fieldset>

              <!-- Form Name -->

              <!-- Text input-->
              <div class="form-group">
                <legend>Information sur le demandeur</legend>
                  <div class="col-sm-4">
                    <label for="demandeur">demandeur:</label>
                    <input type="text" name="demandeur" id="demandeur" placeholder="demandeur" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <label for="motif_demande">motif_demande:</label>
                    <input type="text" name="motif_demande" id="motif_demande" placeholder="motif_demande" class="form-control">
                  </div>
              </div>


              <div class="form-group">
                <legend>Code article citis de reference non taitte</legend>
                  <div class="col-sm-4">
                    <label for="code_article_citis">code_article_citis:</label>
                    <input type="text" id="code_article_citis" name="code_article_citis" placeholder="code_article_citis" class="form-control">
                  </div>
              </div>

              <div class="form-group">
                <legend>Libelle article citis de reference</legend>
                <div class="col-sm-4">
                  <label for="libelle_article_citis">libelle_article_citis:</label>
                  <input type="text" id="libelle_article_citis" name="libelle_article_citis" placeholder="libelle_article_citis" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <legend></legend>
                <div class="col-sm-4">
                </div>
              </div>

              <div class="form-group">
                <button id="add_longueur" class="btn btn-info">ajouter longueur</button>
              </div>

              <fieldset id="longueur">
                  <div class="form-group" >
                      <div class="col-sm-4">
                        <label for="longueur_en_m">longueur_en_m:</label>
                      </div>
                      <div class="col-sm-3">
                          <label for="ref_article_client">ref_article_client:</label>
                      </div>
                      <div class="col-sm-2">
                          <label for="gencod_client">gencod_client:</label>
                      </div>
                        <div class="col-sm-4">
                          <input type="text" id="longueur_en_m" name="longueur_en_m[]" placeholder="longueur_en_m" class="form-control" required="requires">
                        </div>
                        <div class="col-sm-3">
                          <input type="text" id="ref_article_client" name="ref_article_client[]" placeholder="ref_article_client" class="form-control">
                        </div>
                        <div class="col-sm-3">
                          <input type="text" id="gencod_client" name="gencod_client[]" placeholder="gencod_client" class="form-control">
                        </div>
                        <div class="col-sm-1">
                          <button class="remove btn btn-danger">X</button>
                        </div>
                    </div>
               </fieldset>

               <script type="text/javascript">

                 $('#add_longueur').on('click', function() {
                   $('#longueur').append('<div class="form-group"><div class="col-sm-4"><label for="longueur_en_m">longueur_en_m:</label></div><div class="col-sm-3"><label for="ref_article_client">ref_article_client:</label></div><div class="col-sm-2"><label for="gencod_client">gencod_client:</label></div> <div class="col-sm-4"> <input type="text" id="longueur_en_m" name="longueur_en_m[]" placeholder="longueur_en_m" class="form-control" required="requires"></div><div class="col-sm-3"><input type="text" id="ref_article_client" name="ref_article_client[]" placeholder="ref_article_client" class="form-control"></div><div class="col-sm-3"><input type="text" id="gencod_client" name="gencod_client[]" placeholder="gencod_client" class="form-control"></div><div class="col-sm-1"><button class="remove btn btn-danger">X</button></div></div>');
                   return false; //prevent form submission
                 });

                 $('#longueur').on('click', '.remove', function() {
                   $(this).parent().parent().remove();
                   return false; //prevent form submission
                 });

               </script>

               <br/>
               <br/>
               <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-lg btn-block">envoyer le formulaire</button>
               </div>
              </div>
            </fieldset>
          </form>

        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->

</div>
