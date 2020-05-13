<?php
    include '../config/connection.php';
    session_start();
    if(!isset($_SESSION['adminDetail'])){
        header("Location: Login.php");
    }
    $adminId = $_SESSION['adminId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <!--fonts-->
    <title>PDLC NOTICE</title>
</head>