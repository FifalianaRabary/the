<?php
    require'../inc/function.php'; 
    $id=$_GET['id'];
    deleteParcelle($id);
    header('Location:parcelleGestion.php');
?>