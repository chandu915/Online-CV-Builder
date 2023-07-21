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

    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');

        .container {
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            flex-direction: column;
            height: 620px;
        }

        .row {
            background: white;
            display: flex;
            flex-direction: column;
            width: auto;
            height: auto;
        }

        .tb th,
        .tb2 td {
            text-align: center;
            border: 1px solid #ddd;

        }

        .tb-head {
            padding: 10px 0 0 10px;
            background: white;
            width: auto;
        }

        .tb-body {
            padding: 0 10px 20px 10px;
            background: white;
            overflow-x: hidden;
            overflow-y: auto;
            text-align: center;
            height: 400px;
            width: auto;
        }

        table {
            width: auto;
            font-family: 'Roboto', sans-serif;
            border-collapse: collapse;
        }

        .tb2 tr:nth-child(even) {
            background: #f2f2f2;
        }

        .tb2 tr:hover {
            background-color: #ddd;
        }

        .tb th {
            background-color: rgb(42, 42, 42);
            ;
            color: white;
        }

        .reg {
            width: 150px;
            padding: 15px;
            text-align: center;
        }

        .name {
            width: 250px;
        }

        .adm-yr,
        .dob,
        .phn,
        .branch {
            width: 130px;
        }

        .gender {
            width: 90px;
        }

        .email {
            width: 220px;
        }

        .sucess-msg {
            display: block;
            position: relative;
            background: red;
            padding: 15px;
            width: 400px;
        }

        .sucess-msg::after {
            content: "";
            background: yellow;
            height: 10px;
            width: 10px;
        }

        h4 {
            font-family: Quicksand;
        }

        .alert {
            width: 400px;
            margin: 20px auto;
            padding: 15px;
            position: relative;
            background: #a8f0c6;
            border-radius: 5px;
            box-shadow: 0 0 15px 5px #dfdfdf;
            color: #003c06;

        }

        .error {
            width: 600px;
            margin: 20px auto;
            padding: 15px;
            position: relative;
            background: #f7a7a3;
            border-radius: 5px;
            box-shadow: 0 0 15px 5px #dfdfdf;
            color: #003c06;

        }
    </style>
</head>

<body>
    <script src="../js/input_file.js"></script>
    <div class="divv" id="divv">
        <form class="" id="form" action="" method="post" enctype="multipart/form-data">
            <input type="file" name="excel" required value="">
            <button type="submit" name="import">Import</button>
        </form>

    </div>
    <?php
    if (isset($_POST["import"])) {

        echo "<script>document.getElementById('divv').style.display = 'none';</script>";

        ?>


        <?php

        $fileName = $_FILES["excel"]["name"];
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));
        $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "_students." . $fileExtension;

        $targetDirectory = "C:\apache\studentdata/" . $newFileName;
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

            echo "<div class='tb-head'>";

            echo "<table id='students' class='tb'>";

            echo "<thead><tr id='head-row'><th class='reg'>Registration No</th><th class='name'>Name</th><th class='adm-yr'>Admission Date</th><th class='dob'>Date of Birth</th><th class='phn'>Phone</th><th class='gender'>Gender</th><th class='branch'>Branch Code</th><th class='email'>Email</th></tr></thead>";

            echo "</table></div>";

            echo "<div class='tb-body' style='ax-height: 200px; overflow: auto'>";
            echo "<table class='tb2' id='body-tb'><tbody>";
            $reader = new SpreadsheetReader($targetDirectory);



            foreach ($reader as $key => $data) {
                if ($key < 1)
                    continue;


                $reg = $data[0];
                $student_name = $data[1];
                $admission_year = $data[2];
                $dob = $data[3];
                $mobile = $data[4];
                $gender = $data[5];
                $branch_code = substr($reg, 5, 3);
                $email = $reg . "@cutm.ac.in";

                $add_student = "INSERT INTO `student_details` (`registration_no`, `student_name`, `admission_year`, `branch_code`, `mobile`, `dob`, `gender`, `email`) VALUES ('" . $reg . "', '" . $student_name . "', '" . $admission_year . "', '" . $branch_code . "', '" . $mobile . "', '" . $dob . "', '" . $gender . "', '" . $email . "')";
                $login_account = "INSERT INTO `student_login_account`(`registration_no`, `password`, `old_password`, `sign_up_date`, `last_login`, `login_status`, `password_change_date`) VALUES ('$reg','$reg','$reg','$date_today','$date_today','0','$date_today')";

                ?>
                <tr>
                    <td class="reg">
                        <?php echo $reg; ?>
                    </td>
                    <td class="name">
                        <?php echo $student_name; ?>
                    </td>
                    <td class="adm-yr">
                        <?php echo $admission_year; ?>
                    </td>
                    <td class="dob">
                        <?php echo $dob; ?>
                    </td>
                    <td class="phn">
                        <?php echo $mobile; ?>
                    </td>
                    <td class="gender">
                        <?php echo $gender; ?>
                    </td>
                    <td class="branch">
                        <?php echo $branch_code; ?>
                    </td>
                    <td class="email">
                        <?php echo $email; ?>
                    </td>
                </tr>

                <?php

                mysqli_query($con, $add_student);
                $total++;

                //mysqli_query($con, $login_account);
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
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
        echo "</div>";
    }
    ?>


</body>

</html>