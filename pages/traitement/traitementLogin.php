<?php
    require '../../inc/function.php';
    session_start();
    $email=$_POST['mail'];
    $password = $_POST['mdp'];
    $type="admin";
    $check = checkLogin($email,$password,$type);
    if($check != null) {
        $_SESSION['admin'] = $check;
        header('Location:../theInsert.php');
    }
    else{
        header('Location:../loginAdmin.php?error=email ou mot de passe incorrect !!!');
    }
?>