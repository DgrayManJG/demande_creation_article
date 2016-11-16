<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- implémentation bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- implémentation librairie dans l'application  -->
  <link rel="stylesheet" href="<?= css_url('style'); ?>" media="screen" title="no title">
  <link rel="stylesheet" href="<?= css_url('simple-sidebar'); ?>" media="screen" title="no title">
  <link rel="stylesheet" href="<?= fontAwesome_url(); ?>" media="screen" title="no title">

  <!-- implémentation jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>

  <div class="logo_isb">
    <img src="<?= img_url('logo_isb.jpg');?>" height="150" width="190">
  </div>

  <div id="wrapper">
    <!-- Page Content -->

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
                    <a href="<?=site_url('formNewTraitement'); ?>">formulaire nouveau traitement</a>
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
