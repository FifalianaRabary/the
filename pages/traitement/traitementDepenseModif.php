<?php
    require '../../inc/function.php';
    $id = $_POST['id'];
    $type = $_POST['type'];
   

    if(empty($id) || empty($type)){
        header('Location:../depenseModif.php?message=Tous les champs doivent etre remplie');
    } else{
        editTypeDepense($id, $type);
        header('Location:../depenseGestion.php?message=Information modifier');
    }
?>