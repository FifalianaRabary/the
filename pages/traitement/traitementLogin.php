<?php
    require '../../inc/function.php';

    $email=$_POST['mail'];
    $password = $_POST['mdp'];
    $type="admin";
    checkLogin($email,$password,$type);
    header('Location:../loginAdmin.php');
?>