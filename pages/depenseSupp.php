<?php
    require'../inc/function.php'; 
    $id=$_GET['id'];
    deleteTypeDepense($id);
    header('Location:depenseGestion.php');
?>