<?php
$uname = $_REQUEST['uname'];
$pwd = $_REQUEST['pwd'];

session_abort();

$conn = mysqli_connect("localhost", "root", "", "awp_project");

$uname = stripcslashes($uname);
$pwd = stripcslashes($pwd);
$uname = mysqli_real_escape_string($conn, $uname);
$pwd = mysqli_real_escape_string($conn, $pwd);

if ($conn === false) {
    die("Not Connected to . " . mysqli_connect_error());
} else {

    session_start();

    $result = mysqli_query($conn, "SELECT * FROM login_account WHERE username = '" . $uname . "' and password = '" . $pwd . "'");
    $count = mysqli_num_rows($result);
    if ($count != 0) {
        while ($row = mysqli_fetch_array($result)) { 
            $_SESSION['uid'] = $row["userid"];
            $_SESSION['uname'] = $row["usename"];
            $_SESSION['email'] = $row["email"];
            $_SESSION['page'] = "firstpage";

            header("Location: dashboard.php");
        }
    } else {
        // $error_message = "Incorrect Email or Password!!!";
        $_SESSION['msgx'] = "<span class='error_msg'>Incorrect Email or Password!!!</span>";
        header("Location: http://localhost/cv/index.php");
        // $_SESSION['uid'] = "NO";
        // $_GET['page'] = "blank";
        // header("Location: display.php");
    }

}

?>