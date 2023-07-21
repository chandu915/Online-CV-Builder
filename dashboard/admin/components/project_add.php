<?php

session_start();

$userid = $_SESSION['uid'];
$ptitle = $_REQUEST['ptitle'];
$des = $_REQUEST['des'];
$start = $_REQUEST['start'];
$end = $_REQUEST['end'];
$team = $_REQUEST['team'];

$conn = mysqli_connect("localhost", "root", "", "awp_project");

if ($conn === false) {
    die("Not Connected to . "
        . mysqli_connect_error());
} else {
    $add_details = "INSERT INTO `project` (`userid`, `project_title`, `project_description`, `start_date`, `end_date`, `team_size`) VALUES ('".$userid."', '".$ptitle."', '".$des."', '".$start."', '".$end."', '".$team."')";

    mysqli_query($conn, $add_details);
    sleep(1);

    header('Location: http://localhost/cv/dashboard/admin/components/admin.php?page=projects_show');

    exit();

}

?>