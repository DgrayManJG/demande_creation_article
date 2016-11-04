<?php

  $json = array();

  $famille = $_GET['LIBELLE'];

  $json['coucou'][] = 'blabla';

  echo json_encode($json);
 ?>
