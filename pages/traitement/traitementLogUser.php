<?php
    require '../../inc/function.php';
    session_start();
    $email=$_POST['mail'];
    $password = $_POST['mdp'];
    $type="user";
    $check = checkLogin($email,$password,$type);
    if($check != null) {
        $_SESSION['user'] = $check;
        header('Location:../menuUser.php');
    }
    else{
        header('Location:../loginUser.php?error=email ou mot de passe incorrect !!!');
    }
?>