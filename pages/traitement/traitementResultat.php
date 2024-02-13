<?php
    require '../../inc/function.php';
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];
    $parcelle = $_POST['id_parcelle'];
    poidsTotalCueillette($parcelle, $debut, $fin);
    

?>