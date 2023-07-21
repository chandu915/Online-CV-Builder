<?php

session_start();
$email = $_SESSION['email'];
$pwd = $_SESSION['pwd'];
$uname = $_REQUEST['uname'];
$date = date("Y-m-d");

date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:s");

$_SESSION['mail_msg'] = null;


$conn = mysqli_connect("localhost", "root", "", "awp_project");

if ($conn === false) {
	// echo "chandu - error - konda";
	die("Not Connected to . "
		. mysqli_connect_error());
} else {

	try {

		$uname_validation = "SELECT `username` FROM `login_account`";

		$uname_val = $conn->query($uname_validation);

		while ($row = $uname_val->fetch_assoc()) {
			if ($row["username"] == $uname) {
				$msg = "Username not available";
			} else {
				$sign_up = " INSERT INTO `login_account`( `email`, `username`,`old_password`, `password`,`sign_up_date`,`sign_up_time`) VALUES ('$email','$uname','$pwd','$pwd','$date','$time')";

				mysqli_query($conn, $sign_up);

				mysqli_close($conn);
				sleep(3);

				header('Location: http://localhost/cv/');

				exit();
			}
		}
	} catch (Exception $e) {
		$_SESSION['msg'] = "<span class='error_msg'>Username not available</span>";
		header("Location: sign_up_username.php");
	}
}
?>