<?php date_default_timezone_set("America/Porto_Velho"); ?>
<?php include "../includes/db.php" ?>
<?php session_start() ?>
<?php

if(!isset($_SESSION['users_userId'])){
    header("Location: login.php");
} else {
        $usuario_id = $_SESSION['users_userId'];
        $usuario_nome =$_SESSION['users_nome'];
        $usuario_sobrenome = $_SESSION['users_sobrenome'];
        $usuario_email = $_SESSION['users_email'];
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
    <?php
    
    if (isset($_SESSION['users_userId'])) {
        echo "SB Admin 2 - Dashboard";
    } else {
        echo "SB Admin 2 - Login";
    }
    
    ?>    
    
    </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">