<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <div class="c">
        <input>

        
<?php

$page = "print1.php";
require($page);

session_start();

$uid = $_SESSION['uid'];


$conn = mysqli_connect("localhost", "root", "", "awp_project");

if ($conn === false) {
    die("Not Connected to . "
        . mysqli_connect_error());
} else {
    try {
        $result = mysqli_query($conn, "SELECT * FROM login_account WHERE userid = '" . $uid . "'");
        if (!empty($result)) {
            if ($row = mysqli_fetch_array($result)) {
                // $_SESSION['uid'] = $row['userid'];
                echo $row["email"];
                echo $row["password"];
                echo $row["sign_up_date"];
            }
        }
    } catch (Exception $e) {

    }
}

?>
    </div>
</body>
</html>
