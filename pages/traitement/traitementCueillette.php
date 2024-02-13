<?php
    require '../../inc/function.php';
    $response = "failure";
    $date = $_GET['date'];
    $cueilleur = $_GET['id_cueilleur'];
    $parcelle = $_GET['id_parcelle'];
    $poids = $_GET['poids'];
    $validation =insertCueillette($cueilleur, $parcelle, $poids, $date);
    if ($validation) {
        $response = "success";
    }
    if (!$validation) {
        $response = "failed";
    }

    echo $response;
?>