<?php

$email = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];

// echo $pwd;
// echo $email;

session_start();

$_SESSION['email'] = $email;
$_SESSION['pwd'] = $pwd;

header(("Location: sign_up_username.php"));



?>