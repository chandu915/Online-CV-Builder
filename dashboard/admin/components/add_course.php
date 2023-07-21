<?php
// if (isset($_POST["import"])) {

// }
$con = mysqli_connect("localhost", "root", "", "cutm_tracker");
$total = 0;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Import Excel To MySQL</title>
    <link rel="stylesheet" href="../css/table_import.css" />
    <link rel="stylesheet" href="../css/student_upload.css" />
    <link rel="stylesheet" href="../css/upload.css" />
    <style>

    </style>

</head>

<body>
    <div class="container_x" id="container_x">
        
        <div class="drag-area">

            <div class="contentx-upload">
                <img src="../images/xlsx.png" style="height:100px; width:100px;" alt="cutm" />
                <br>
                <header>Drag & Drop</header>
                <span>OR</span>
                <button>Browse File</button>
                <form class="" id="form" action="" method="post" enctype="multipart/form-data">
                <input type="file" hidden  name="excel"/>

            </div>
        </div>
        <div class="contentx-upload2">
            <p id="file_name"></p>

            <button type="submit" name="upload">Upload</button>
            </form>

        </div>
    <!-- </div> -->

        
    </div>
    <script src="../js/student_upload.js"></script>

    <?php
    if (isset($_POST["upload"])) {

        echo "<script>document.getElementById('container_x').style.display = 'none';</script>";

        ?>


        <?php

        $fileName = $_FILES["excel"]["name"];
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));
        $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "_course." . $fileExtension;

        $targetDirectory = "C:\apache\course/" . $newFileName;
        move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

        error_reporting(0);
        ini_set('display_errors', 0);

        require 'excelReader/excel_reader2.php';
        require 'excelReader/SpreadsheetReader.php';

        $date_today = date("Y-m-d") . " " . date("h:i:s");

        // echo "<div class='mainx'>";
        try {

            echo "<div class='container'>";

            echo "<div class='row'>";

            // echo "<div class='tb-head'>";
    
            // echo "<table id='students' class='tb'>";
    
            // echo "<thead><tr id='head-row'><th class='reg'>Registration No</th><th class='name'>Name</th><th class='adm-yr'>Admission Date</th><th class='dob'>Date of Birth</th><th class='phn'>Phone</th><th class='gender'>Gender</th><th class='branch'>Branch Code</th><th class='email'>Email</th></tr></thead>";
    
            // echo "</table></div>";
    
            // echo "<div class='tb-body' style='ax-height: 200px; overflow: auto'>";
            // echo "<table class='tb2' id='body-tb'><tbody>";
            $reader = new SpreadsheetReader($targetDirectory);



            foreach ($reader as $key => $data) {
                if ($key < 1)
                    continue;


                $reg = $data[0];
                // $student_name = $data[1];
                // $admission_year = $data[2];
                // $dob = $data[3];
                // $mobile = $data[4];
                // $gender = $data[5];
                // $branch_code = substr($reg, 5, 3);
                // $email = $reg . "@cutm.ac.in";


                echo $reg;

                // $add_student = "INSERT INTO `student_details` (`registration_no`, `student_name`, `admission_year`, `branch_code`, `mobile`, `dob`, `gender`, `email`) VALUES ('" . $reg . "', '" . $student_name . "', '" . $admission_year . "', '" . $branch_code . "', '" . $mobile . "', '" . $dob . "', '" . $gender . "', '" . $email . "')";
                // $login_account = "INSERT INTO `student_login_account`(`registration_no`, `password`, `old_password`, `sign_up_date`, `last_login`, `login_status`, `password_change_date`) VALUES ('$reg','$reg','$reg','$date_today','$date_today','0','$date_today')";

                ?>
                <!--  -->

                <?php

                //mysqli_query($con, $add_student);
                // $total++;

                //mysqli_query($con, $login_account);
            }
            // echo "</tbody>";
            // echo "</table>";
            // echo "</div>";
            echo "</div>";

            // echo "<button name='upload'>UPLOAD</button>";
            if ($total != 0) {
                echo " <div class='alert'><h4>Successfully added " . $total . " students</h4></div>";
            }


            // echo "</div>";
        } catch (Exception $e) {
            echo " <div class='alert'><h4>Successfully added " . $total . " students</h4></div>";
            echo " <div class='error'><h4>Student already exists - " . $student_name . " - " . $reg . "</h4></div>";
        }

        echo "<div class='bbck'><a href='http://localhost/cbcs_tracker/dashboard/admin/components/admin.php?page=students' class='bck'><button>Back</button></a></div>";

        echo "</div>";
    }
    ?>


</body>

</html>