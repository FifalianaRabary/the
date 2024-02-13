<?php
    require '../../inc/function.php';
    $response = "failure";
    $date = $_GET['date'];
    $cueilleur = $_GET['cueilleur'];
    $parcelle = $_GET['parcelle'];
    $poids = $_GET['poids'];
    $validation = insertCueillette($date, $cueilleur, $parcelle,$poids);
    if ($validation) {
        $response = "success";
    }
    if (!$validation) {
        $response = "failed";
    }
    echo $response;
?>