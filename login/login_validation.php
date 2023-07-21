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
            $userid = $row["userid"];
            $_SESSION['uid'] = $userid;
            $name = mysqli_query($conn, "SELECT  `first_name`, `middle_name`, `last_name` FROM `user_info` WHERE userid = " . $userid);
            $namec = mysqli_num_rows($name);
            if ($namec != 0) {
                while ($rowx = mysqli_fetch_array($name)) {
                    $Fname = $rowx["first_name"] . " " . $rowx["middle_name"] . " " . $rowx["last_name"];
                    $_SESSION['name'] = $Fname;
                }
            }
            else if($namec==0){
                $_SESSION['name'] = "New User";
            }


            // $_SESSION['page'] = "firstpage";

            header("Location: http://localhost/cv/dashboard/admin/components/admin.php");
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