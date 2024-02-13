<?php
    require '../../inc/function.php';
    $id= $_POST['id'];
    $surface = $_POST['surface'];
    $id_the = $_POST['id_the'];

    if(empty($id)){
        header('Location:../parcelleModif.php?message=Tous les champs doivent etre remplie');
    } else{
        editParcelle($id,$surface,$id_the);
        header('Location:../parcelleGestion.php?message=Information modifier');
    }
?>