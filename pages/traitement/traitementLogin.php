<?php
    require '../../inc/function.php';

    $email=$_POST['mail'];
    $password = $_POST['mdp'];
    $type;
    checkLogin($email,$password,$type);
?>