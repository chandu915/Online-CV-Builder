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

    #ed{
        background: gray;
        color:white;
    }
</style>

<div class="main_x">
    <?php


    $conn = mysqli_connect("localhost", "root", "", "awp_project");

    $userid = $_SESSION['uid'];
    $_SESSION['uid'] = $userid;

    if ($conn === false) {
        die("Not Connected to . " . mysqli_connect_error());
    } else {

        $education = "SELECT * FROM `education` WHERE userid=" . $userid;
        $ed = $conn->query($education);
        $count = mysqli_num_rows($ed);
        if ($count == 0) {
            ?>
            <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=basic_details" class="addx">
                <!-- <span class="nav-item">Logout</span> -->
                ADD
            </a>
            <?php
        } else if ($count != 0) {
            // while ($row = mysqli_fetch_array($education)) {
            //     $degree = $row["degree"];
            //     $yop = $row["yop"];
            //     $specialization = $row["specialization"];
            //     $gendecgpar = $row["cgpa"];
            //     $percentage = $row["percentage"];
            //     $university = $row["university"];
            //     $state = $row["state"];
            //     $board = $row["board"];
            //     $city = $row["city"];
    
            ?>
                <div class="main">
                    <div class="addxx">
                        <div class="unamex">

                            <!-- <div id="cv"> -->

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
                                        <th><span>Degree</span></th>
                                        <th><span>Year of Pass</span></th>
                                        <th><span>Institution</span></th>
                                        <th><span>Board/University</span></th>
                                        <th><span>CGPA/Percentage</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sl_no = 1;
                                    while ($row = $ed->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td>
                                                <p>
                                                <?php echo $sl_no;
                                                $sl_no++; ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                <?php echo $row["degree"]; ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                <?php echo $row["yop"]; ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                <?php echo $row["university"]; ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                <?php echo $row["board"]; ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                <?php echo $row["cgpa"]; ?>
                                                </p>
                                            </td>
                                        </tr>

                                <?php } ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                    <br>
                <br>
                <a href="details_update.php" class="addx">
                    EDIT
                </a>
                </div>
                
            </div>



            </div>

        <?php
        }
    }


    // SELECT * FROM `user_info` WHERE userid=1;
    
    ?>




</div>