<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- implémentation bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>


  <!-- implémentation librairie dans l'application  -->
  <link rel="stylesheet" href="<?= css_url('style'); ?>" media="screen" title="no title">
  <link rel="stylesheet" href="<?= css_url('simple-sidebar'); ?>" media="screen" title="no title">
  <link rel="stylesheet" href="<?= fontAwesome_url(); ?>" media="screen" title="no title">

  <!-- implémentation jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- exemple de code ici : https://datatables.net/examples/styling/bootstrap4.html -->
  <!-- implémentation DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap4.min.css" media="screen" title="no title">
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>


</head>
<body>

  <div class="logo_isb">
    <img src="<?= img_url('logo_isb.jpg');?>" height="150" width="190">
  </div>


  <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Navigation
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('formCodeArticle'); ?>">formulaire code article</a>
                </li>
                <li>
                    <a href="<?= site_url('formNewLongueur'); ?>">formulaire nouvelle longueur</a>
                </li>
                <li>
                    <a href="<?= site_url('formNewTraitement'); ?>">formulaire nouveau traitement</a>
                </li>
                <li>
                    <a href="<?= site_url('dataCodeArticle'); ?>">data code article</a>
                </li>
                <li>
                    <a href="<?= site_url('dataNewLongueur'); ?>">data nouvelle longueur</a>
                </li>
                <li>
                    <a href="<?= site_url('dataNewTraitement'); ?>">data nouveau traitement</a>
                </li>
            </ul>
        </div>


        <a href="#menu-toggle" id="menu-toggle">
          <i class="fa fa-align-left fa-3x" title="Align Left"></i>
        </a>
