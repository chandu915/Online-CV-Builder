<link href="../css/education_style.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    * {
        font-family: 'Roboto', sans-serif;
    }

    .main {
        background: none;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
    }

    .addxx {
        background: #fff;
        padding: 30px;
        display: flex;
        justify-content: center;
        align-items: top;
        flex-direction: row;
        border-radius: 10px;
    }

    .uname {
        /* height: 200px; */
        /* width: 95%; */
        background: white;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
    }

    .unamex {
        padding: 10px;
        background: white;
    }

    .add_table {
        background: none;
        border-collapse: collapse;
        font-family: 'Roboto', sans-serif;
        border-top: none;

    }

    .add_table tr {
        border-bottom: 1px solid black;
    }

    .add_table td,
    th {
        background: none;
        padding: 10px 50px 10px 5px;
        /* border: 1px solid black; */


    }

    /* .add_table th {
        color:dodgerblue;
    } */

    .addx {
        background: dodgerblue;
        padding: 15px 50px;
        text-align: center;
        color: white;
        font-family: Arial;
    }

    #name {
        font-size: 20px;
    }

    #x{
        background: none;
        height: 100%;
        text-align:center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #project{
        background: gray;
        color:white;
    }
</style>
<div class="mainx">
<?php


$conn = mysqli_connect("localhost", "root", "", "awp_project");

$userid = $_SESSION['uid'];
$_SESSION['uid'] = $userid;

if ($conn === false) {
    die("Not Connected to . " . mysqli_connect_error());
} else {

    $education = "SELECT * FROM `project` WHERE userid=" . $userid;
    $ed = $conn->query($education);
    $count = mysqli_num_rows($ed);
    if ($count == 0) {
        ?>
        <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=add_project" class="addx">

            ADD
        </a>
        <?php
    } else if ($count != 0) {


        ?>
            <div class="main">
                <div class="addxx">
                    <div class="unamex">
                        <article>
                            <address class="details">
                                <h4>
                                    <?php
                                    ?>
                                    </p>

                            </address>

                        </article>
                        <table id="education">
                            <thead>
                                <tr>
                                    <th><span>S. No</span></th>
                                    <th><span>Title</span></th>
                                    <th id="description" style="width:400px;"><span>Description</span></th>
                                    <th><span>Start</span></th>
                                    <th><span>End</span></th>
                                    <th><span>Team Members</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sl_no = 1;
                                while ($row = $ed->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <p id="x">
                                            <?php echo $sl_no;
                                            $sl_no++; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                            <?php echo $row["project_title"]; ?>
                                            </p>
                                        </td>
                                        <td style="padding:20px;">
                                            <p>
                                            <?php echo $row["project_description"]; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                            <?php echo $row["start_date"]; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                            <?php echo $row["end_date"]; ?>
                                            </p>
                                        </td>
                                        <td >
                                            <p id="x">
                                            <?php echo $row["team_size"]; ?>
                                            </p>
                                        </td>
                                    </tr>

                            <?php } ?>
                            </tbody>
                        </table>

                        <table class="sign">
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                       

                    </div>
                    
                </div>
                <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=add_project" class="addx">
                            ADD PROJECT
                        </a>
            </div>

            </div>
            <br>
            <br>

            </div>
        <?php
    }
}



?>

</div>