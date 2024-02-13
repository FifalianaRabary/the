<?php
    $nom=$_POST['nom'];
    $occupation=$_POST['occupation'];
    $rendement=$_POST['rendement'];
    $id=$_POST['id'];
    if(empty($nom)){
        header('Location:../theModif.php?message=Tous les champs doivent etre remplie');
    } else{
        editThe($id, $nom, $occupation, $rendement);
        header('Location:../theGestion.php?message=Information modifier');
    }
?>