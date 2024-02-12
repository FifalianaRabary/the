<?php
    require '../../inc/function.php';
   
    $nom = $_POST['type'];

    if(empty($nom)){
        header('Location:../depenseInsert.php?message=Tous les champs doivent etre remplie');
    } else{
        insertTypeDepense($nom);
        header('Location:../depenseGestion.php');
    }
?>