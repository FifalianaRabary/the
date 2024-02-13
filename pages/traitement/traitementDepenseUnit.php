<?php
    require '../../inc/function.php';
   
    $date = $_POST['date'];
    $id_type_depense = $_POST['id_type_depense'];
    $poids = $_POST['poids'];
    $id_parcelle = $_POST['id_parcelle'];


    if(empty($date)){
        header('Location:../saisieDepense.php?message=Tous les champs doivent etre remplie');
    } else{
        insertDepense($id_type, $date, $montant, $id_parcelle);
        header('Location:../saisieDepense.phpmessage=Depense inserer');
    }
?>