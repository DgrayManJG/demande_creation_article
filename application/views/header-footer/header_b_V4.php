<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="<?= css_url('style'); ?>" media="screen" title="no title">
  <link rel="stylesheet" href="<?= css_url('simple-sidebar'); ?>" media="screen" title="no title">
  <link rel="stylesheet" href="<?= fontAwesome_url(); ?>" media="screen" title="no title">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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


       <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Afficher/cacher le menu</a>
