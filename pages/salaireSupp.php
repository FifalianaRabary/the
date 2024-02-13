<?php
    require'../inc/function.php'; 
    $id=$_GET['id'];
    deleteSalaire($id);
    header('Location:salaireGestion.php');
?>