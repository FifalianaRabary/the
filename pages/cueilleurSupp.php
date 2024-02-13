<?php
    require'../inc/function.php'; 
    $id=$_GET['id'];
    deleteCueilleur($id);
    header('Location:cueilleurGestion.php');
?>