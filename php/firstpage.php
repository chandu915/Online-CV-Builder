<?php
$conn = mysqli_connect("localhost", "root", "", "awp_project");


if ($conn === false) {
    die("Not Connected to . " . mysqli_connect_error());
} else {

    // session_start();
    // SELECT `first_name`, `middle_name`, `last_name` FROM `user_info` WHERE userid=1;
    $result = mysqli_query($conn, "SELECT `first_name`, `middle_name`, `last_name` FROM `user_info` WHERE userid='" . $_SESSION['uid'] . "'");
    while ($row = mysqli_fetch_array($result)) {
        $name = $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"];
    }

    echo "<h1>WELCOME " . $name . "</h1>";
    $_SESSION['name'] = $name;
}

?>