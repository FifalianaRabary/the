<?php
    require '../../inc/function.php';
   
    $nom = $_POST['nom'];
    $genre = $_POST['id_genre'];
    $dtn = $_POST['dtn'];

    if(empty($nom) || empty($dtn)){
        header('Location:../cueilleurInsert.php?message=Tous les champs doivent etre remplie');
    } else{
        insertCueilleur($nom,$genre,$dtn);
        header('Location:../cueilleurGestion.php');
    }
?>