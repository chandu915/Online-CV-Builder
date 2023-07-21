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

// echo $userid;

//   header("Location: http://localhost/cv/dashboard/admin/components/admin.php?page=settings");
// echo $fname;

$conn = mysqli_connect("localhost", "root", "", "awp_project");

if ($conn === false) {
    // echo "chandu - error - konda";
    die("Not Connected to . "
        . mysqli_connect_error());
} else {
    $update_details = "UPDATE `user_info` SET `first_name`='".$fname."',`middle_name`='".$mname."',`last_name`='".$lname."',`gender`='".$gender."',`phone`='".$phone."',`dob`='".$dob."',`address_p`='".$addr."',`city_p`='".$city."',`country_p`='".$country."',`zip`='".$pin."',`personal_mail`='".$email."' WHERE `userid`=".$userid;

    mysqli_query($conn, $update_details);

    // mysqli_close($conn);
    sleep(1);

    header('Location: http://localhost/cv/dashboard/admin/components/admin.php?page=basic_details_show');

    exit();

}

?>