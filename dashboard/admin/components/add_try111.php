<?php
// if (isset($_POST["import"])) {

// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Import Excel To MySQL</title>
    <link rel="stylesheet" href="../css/table_import.css" />
    <!-- <style>
        .tbb {
            height: 85%;
            overflow-x: hidden;
            overflow-y: auto;
            text-align: center;
            padding: 20px;
        }

        #students {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        #students td,
        #students th {
            border: 1px solid #ddd;
            padding: 15px;
        }

        #students tr:nth-child(even) {
            /* background-color: #f2f2f2; */
            background-color: transparent;
        }

        #students tr:hover {
            background-color: #ddd;
        }

        #students th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #008ec6;
            color: white;
        }

        #students tbody {
            background: gray;
        }

        .table.sticky th {
            position: sticky;
            top: 0;
            
        }

        .table.sticky th::after {
            content: '';
            bottom: 0;
            left: 0;
            position: absolute;
            width: 100%;
            height: 5px;
            background: black;
        } -->
    <!-- </style> -->
    <style>
        .container {
            background: rgb(255, 255, 255);
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
        }

        .row {
            background: white;
            /* padding: 40px; */
            display: flex;
            /* justify-content: space-between; */
            /* align-items:center; */
            flex-direction: column;
            width: auto;
            height: auto;
        }

        .tb th,
        .tb2 td {
            /* background: rgb(255, 255, 255); */
            text-align: center;
            border: 1px solid #ddd;
            /* padding: 10px; */
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
            height: 500px;
            width: auto;
        }

        table {
            width: auto;
            font-family: 'Roboto', sans-serif;
            border-collapse: collapse;
        }

        .tb2 tr:nth-child(even) {
            /* background-color: #f2f2f2; */
            background: #f2f2f2;
        }

        .tb2 tr:hover {
            background-color: #ddd;
        }
        .tb th {
            background-color: rgb(42, 42, 42);;
            color: white;
        }
        /* th,
      #test td {
        width: 33%;
        text-align: left;
      }
      th,
      td {
        width: 25%;
      }
      th:first-child,
      td:first-child {
        width: 50%;
      } */

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
    </style>
</head>

<body>
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
            // $name = $row[0];
            // $age = $row[1];
            // $country = $row[2];
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
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>

</body>

</html>