<?php
    require'../inc/function.php'; 
    $id=$_GET['id'];
    deleteThe($id);
    header('Location:theGestion.php');
?>