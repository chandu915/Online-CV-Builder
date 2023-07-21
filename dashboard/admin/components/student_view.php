<?php

if (!empty($_GET['namexx'])) {
    $reg = $_GET['namexx'];


    // $set_page = $get . ".php";
    echo $reg;
    echo "<br>";
    // include $set_page;

}



$conn = mysqli_connect("localhost", "root", "", "cutm_tracker");


    $rows = mysqli_query($conn, "SELECT * FROM student_details WHERE registration_no='$reg'");
    // $rows2 = mysqli_query($conn, "SELECT * FROM `student_details` WHERE SUBSTR(registration_no,1,2)='$year_search' AND branch_code='$branch_search'");

    foreach ($rows as $row):

        $reg = $row["registration_no"];
        $student_name = $row["student_name"];
        $admission_year = $row["admission_year"];
        $dob = $row["dob"];
        $mobile = $row["mobile"];
        $gender = $row["gender"];
        $branch_code = $row["branch_code"];
        $email = $row["email"];

        $branch = mysqli_query($conn, "SELECT * FROM branch WHERE branch_code='$branch_code'");
        foreach ($branch as $b):
            $branch_name = $b["branch_name"];

        endforeach;

        // echo $student_name." ".$dob." ".$mobile." ".$gender." ".$branch_code." ".$email." ".$admission_year;
    
    endforeach;
    echo $student_name."<br>".$dob."<br>".$mobile."<br>".$gender."<br>".$branch_code."<br>".$email."<br>".$admission_year."<br>".$branch_name;
        ?>