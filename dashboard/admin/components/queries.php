<link rel="stylesheet" href="../css/table.css" />


<style>
    input {
        border: 2px solid black;
        padding: 15px;
    }

    .xc{
        background: none;
        display: flex;
        padding:15px;
        width: 700px;
        justify-content: space-evenly;
    }
    .name-a{
        color:black;
        cursor:pointer;
        font-weight: 550;

    }
    .name-a:hover{
    color:dodgerblue;
    font-weight: 600;

    }
</style>

<link rel="stylesheet" href="../css/select.css">



<?php

$conn = mysqli_connect("localhost", "root", "", "cutm_tracker");


echo "<div class='container'>";
?>

<form class="" id="form" action="" method="post" enctype="multipart/form-data">
    <div class="xc">
        <div class="custom-select" style="width:200px;">
            <select id="ss" name="year">
                <option disabled>Select Year</option>
                <option value="19">2019-23</option>
                <option value="20">2020-24</option>
                <option value="21">2021-25</option>
                <option value="22">2022-26</option>
            </select>
        </div>
        <div class="custom-select" style="width:200px;">
            <select id="ss" name="branch">
                <option disabled>Select Branch</option>
                <option value="113">ECE</option>
                <option value="115">EEE</option>
                <option value="112">CSE</option>
                <option value="111">Civil</option>
                <option value="116">Mechanical</option>
            </select>
        </div>
        <!-- <input type="text" name="reg" placeholder="Registration Number" required value=""> -->
        <button type="submit" name="submit">Search</button>
    </div>
</form>


<?php


if (isset($_POST["submit"])) {

    // $reg_search = $_POST['reg'];
    $year_search = $_POST['year'];
    $branch_search = $_POST['branch'];



    echo "<div class='row'>";

    echo "<div class='tb-head'>";

    echo "<table id='students' class='tb'>";

    echo "<thead><tr id='head-row'><th class='reg'>Registration No</th><th class='name'>Name</th><th class='adm-yr'>Admission Date</th><th class='dob'>Date of Birth</th><th class='phn'>Phone</th><th class='gender'>Gender</th><th class='branch'>Branch Code</th><th class='email'>Email</th></tr></thead>";

    echo "</table></div>";

    echo "<div class='tb-body' style='ax-height: 200px; overflow: auto'>";
    echo "<table class='tb2' id='body-tb'><tbody>";
    //$rows = mysqli_query($conn, "SELECT * FROM student_details WHERE registration_no='$reg_search'");
    $rows2 = mysqli_query($conn, "SELECT * FROM `student_details` WHERE SUBSTR(registration_no,1,2)='$year_search' AND branch_code='$branch_search'");

    foreach ($rows2 as $row):

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
            <?php 
                echo "<a href='http://localhost/cbcs_tracker/dashboard/admin/components/admin.php?page=student_view&namexx=$reg' class='name-a'>";
                    echo $student_name; ?>
                </a>
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
    endforeach;
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}
?>

<script src="../js/select_style.js"></script>