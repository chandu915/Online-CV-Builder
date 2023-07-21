<?php

// echo "Hello";
// echo "<br>";

$uname2 = $_REQUEST["uname"];
// $pwd = $_REQUEST["pwd"];
echo $uname2;
$uname = "chandu15";
$pwd = "12345@";

session_start();

$_SESSION['uname'] = $uname2;

if (isset($_SESSION['uname'])) {
  echo "<h1> Welcome " . $_SESSION['uname'] . "</h1>";
  echo "<br>";
  echo "<a href='display.php'>Display</a>";
}

// $mail = $_REQUEST["uname"];
// echo $mail;


?>