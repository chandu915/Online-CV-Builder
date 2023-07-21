<?php

session_start();

$userid = $_SESSION['uid'];
$sname = $_REQUEST['sname'];
$rating = $_REQUEST['rating'];


// echo $userid;

//   header("Location: http://localhost/cv/dashboard/admin/components/admin.php?page=settings");
// echo $fname;

$conn = mysqli_connect("localhost", "root", "", "awp_project");

if ($conn === false) {
    // echo "chandu - error - konda";
    die("Not Connected to . "
        . mysqli_connect_error());
} else {
    $add_details = "INSERT INTO `skills` (`userid`, `skill_name`, `rating`) VALUES ('".$userid."', '".$sname."', '".$rating."')";

    mysqli_query($conn, $add_details);

    // mysqli_close($conn);
    sleep(1);

    header('Location: http://localhost/cv/dashboard/admin/components/admin.php?page=skills_show');

    exit();

}

?>