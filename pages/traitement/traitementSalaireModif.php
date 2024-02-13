<?php
    $id_cueilleur=$_POST['id_cueilleur'];
    $montant=$_POST['montant'];
    $id=$_POST['id'];
    if(empty($montant)){
        header('Location:../salaireModif.php?message=Tous les champs doivent etre remplie');
    } else{
        editSalaire($id, $id_cueilleur, $montant);
        header('Location:../salaireGestion.php?message=Information modifier');
    }
?>