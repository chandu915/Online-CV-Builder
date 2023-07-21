<?php

session_start();

$get = $_SESSION['page'];
if(!empty($_GET['page'])){
    $get = $_GET['page'];
}

$set_page = $get . ".php";
// header("Location: dashboard.php");
include 'dashboard.php';
?>