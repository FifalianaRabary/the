<?php
    require '../../inc/function.php';

    $cueilleur = $_POST['id_cueilleur'];
    $montant = $_POST['montant'];
    if(empty($cueilleur)){
        header('Location:../salaireInsert.php?message=Tous les champs doivent etre remplie');
    } else{
        insertSalaire($cueilleur,$montant);
        header('Location:../salaireGestion.php');
    }
?>