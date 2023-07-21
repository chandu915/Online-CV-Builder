<link rel="stylesheet" href="../css/table.css" />
<link rel="stylesheet" href="../css/select.css">



<style>
    input {
        /* border: 2px solid black; */
        padding: 15px;
        background: rgb(90, 90, 90);
        font-family: Arial;
        color: white;
        font-size: 15px;
    }

    ::placeholder {
        color: white;
        opacity: 1;
    }

    input:focus::placeholder {
        color: transparent;
    }

    .name-a {
        color: black;
        cursor: pointer;
        font-weight: 550;

    }

    .name-a:hover {
        color: dodgerblue;
        font-weight: 600;

    }
</style>

<?php

$conn = mysqli_connect("localhost", "root", "", "cutm_tracker");


echo "<div class='container'>";
?>

<form class="" id="form" action="" method="post" enctype="multipart/form-data">
    <input type="text" name="reg" placeholder="Registration Number" required value="">
    <button type="submit" name="submit">Search</button>
</form>

<?php


if (isset($_POST["submit"])) {

    $reg_search = $_POST['reg'];



    echo "<div class='row'>";

    echo "<div class='tb-head'>";

    echo "<table id='students' class='tb'>";

    echo "<thead><tr id='head-row'><th class='reg'>Registration No</th><th class='name'>Name</th><th class='dob'>Date of Birth</th><th class='phn'>Phone</th><th class='gender'>Gender</th><th class='email'>Email</th></tr></thead>";

    echo "</table></div>";

    echo "<div class='tb-body' style='ax-height: 200px; overflow: auto'>";
    echo "<table class='tb2' id='body-tb'><tbody>";
    $rows = mysqli_query($conn, "SELECT * FROM student_details WHERE registration_no='$reg_search'");
    foreach ($rows as $row):

        $reg = $row["registration_no"];
        $student_name = $row["student_name"];
        $admission_year = $row["admission_year"];
        $dob = $row["dob"];
        $mobile = $row["mobile"];
        $gender = $row["gender"];
        $branch_code = $row["branch_code"];
        $email = $row["email"];
        ?>
        <tr>
            <td class="reg">
                <?php echo $reg; ?>
            </td>
            <td class="name">
                <a href="http://localhost/cbcs_tracker/dashboard/admin/components/admin.php?page=students" class="name-a">
                    <?php echo $student_name; ?>
                </a>
            </td>
            <!-- <td class="adm-yr">
                        <?php //echo $admission_year; ?>
                    </td> -->
            <td class="dob">
                <?php echo $dob; ?>
            </td>
            <td class="phn">
                <?php echo $mobile; ?>
            </td>
            <td class="gender">
                <?php echo $gender; ?>
            </td>
            <!-- <td class="branch">
                        <?php //echo $branch_code; ?>
                    </td> -->
            <td class="email">
                <?php echo $email; ?>
            </td>
        </tr>

        <?php
    endforeach;
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}
?>