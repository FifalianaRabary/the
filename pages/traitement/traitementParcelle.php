<?php
    require '../../inc/function.php';
    $surface = $_POST['surface'];
    $the = $_POST['id_the'];

    if(empty($surface) || empty($the)){
        header('Location:../parcelleInsert.php?message=Tous les champs doivent etre remplie');
    } else{
        insertParcelle($surface,$the);
        header('Location:../parcelleGestion.php');
    }
?>