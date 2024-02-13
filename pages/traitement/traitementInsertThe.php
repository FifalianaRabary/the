<?php
    require '../../inc/function.php';
   
    $nom = $_POST['nom'];
    $occupation = $_POST['occupation'];
    $rendement = $_POST['rendement'];
    $prixVente = $_POST['prixVente'];
    if(empty($nom) || empty($occupation) || empty($rendement)){
        header('Location:../theInsert.php?message=Tous les champs doivent etre remplie');
    } else{
        insertThe($nom,$rendement,$occupation);
        insertVente($prixVente);
        header('Location:../theGestion.php');
    }
?>