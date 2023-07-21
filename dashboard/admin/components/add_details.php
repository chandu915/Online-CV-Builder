<?php

session_start();

$userid = $_SESSION['uid'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$mname = $_REQUEST['mname'];
$dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];
$email = $_REQUEST['email'];
$addr = $_REQUEST['addr'];
$city = $_REQUEST['city'];
$country = $_REQUEST['country'];
$pin = $_REQUEST['pin'];
$phone = $_REQUEST['phone'];


$conn = mysqli_connect("localhost", "root", "", "awp_project");

if ($conn === false) {
    die("Not Connected to . "
        . mysqli_connect_error());
} else {
    $add_details = "INSERT INTO `user_info` (`userid`, `first_name`, `middle_name`, `last_name`, `gender`, `phone`, `dob`, `address_p`, `city_p`, `country_p`, `zip`, `personal_mail`) VALUES ('".$userid."', '".$fname."', '".$mname."', '".$lname."', '".$gender."', '".$phone."', '".$dob."', '".$addr."', '".$city."', '".$country."', '".$pin."', '".$email."')";

    mysqli_query($conn, $add_details);
    sleep(1);

    header('Location: http://localhost/cv/dashboard/admin/components/admin.php?page=basic_details_show');

    exit();

}

?>