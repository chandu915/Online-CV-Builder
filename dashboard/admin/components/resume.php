<script src="../js/jquery.js"></script>
<link href="../css/education_style.css" rel="stylesheet">

<!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <link href="../css/education_style.css" rel="stylesheet"> -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    * {
        font-family: 'Roboto', sans-serif;
    }

    #cv {
        background: none;
        width: 210mm;
        height: 270mm;
        /* overflow:hidden; */

    }

    .main_resume {
        background: none;
        padding: 20px;
        height: 180mm;
        overflow: auto;
    }

    #header_view {
        background: dodgerblue;
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        color: white;
        font-size: 14px;
    }

    .photo_name {
        background: none;
        height: 50mm;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }





    .photo_ {
        height: 90%;
        width: 50mm;
        background: none;
    }

    .nmemail_ {
        height: 90%;
        width: 130mm;
        background: none;
    }

    #f_name {
        background: none;
        font-size: 50px;
        font-weight: bold;
    }

    #ud td {
        /* padding: 5px 0 ; */
        font-size: 15px;
    }

    .mpw {
        background: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 35mm;

    }
    #resume{
        background: gray;
        color:white;
    }
</style>
<div class="resume_cv">
    <div class="main_resume">
        <div id="cv_main">

            <?php

            $userid = $_SESSION['uid'];
            $_SESSION['uid'] = $userid;
            $conn = mysqli_connect("localhost", "root", "", "awp_project");

            if ($conn === false) {
                die("Not Connected to . "
                    . mysqli_connect_error());
            }

            // $fname = $_REQUEST['fname'];
            
            $details = " SELECT * FROM `user_info` WHERE userid='" . $userid . "'";

            // $education = "SELECT education.* FROM education INNER JOIN user_info ON education.userid=user_info.userid WHERE user_info.first_name='$fname'";
            
            $result1 = $conn->query($details);
            // $result2 = $conn->query($education);
            

            // mysqli_close($conn);
            ?>

            <div id="cv" size="A4">
                <div class="photo_name">
                    <div class="photo_">
                        <img src="../images/photo_cv.jpg" style="height:45mm;">
                    </div>
                    <div class="nmemail_">
                        <!-- <h1>CHANDU</h1> -->
                        <p id="f_name">
                            <?php
                            while ($rowx = $result1->fetch_assoc()) {
                                $fullname = $rowx["first_name"] . " " . $rowx["middle_name"] . " " . $rowx["last_name"];
                                echo $fullname;

                                ?>
                            </p>
                            <br>
                            <!-- <br> -->
                            <!-- <table id="ud"> -->
                            <div class="mpw"><img src="../images/mail.jpg" style="height:10mm;">
                                <?php echo $rowx["personal_mail"]; ?>
                            </div>
                            <div class="mpw"><img src="../images/phone.jpg" style="height:10mm;">
                                <?php echo $rowx["phone"]; ?>
                            </div>




                            </table>
                        <?php } ?>
                    </div>


                </div>

                <?php


                // $conn = mysqli_connect("localhost", "root", "", "awp_project");
                


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
                                        <h1 id="header_view">EDUCATION</h1>
                                        <br>
                                        <table id="education">
                                            <thead>
                                                <tr>
                                                    <th><span>S. No</span></th>
                                                    <th><span>Degree</span></th>
                                                    <th><span>Graduation</span></th>
                                                    <th><span>Institution</span></th>
                                                    <th><span>Board/University</span></th>
                                                    <th><span>CGPA</span></th>
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
                                <h1 id="header_view">PROJECTS</h1>
                                <!-- <br> -->

                                <?php
                                $prj = "SELECT * FROM `project` WHERE userid=" . $userid;
                                $ed = $conn->query($prj);
                                $count = mysqli_num_rows($ed);
                                if ($count == 0) {
                                    ?>
                                    <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=add_project" class="addx">
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
                                                                <th><span>Title</span></th>
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
                                                                    <td>
                                                                        <p id="x">
                                                                    <?php echo $row["team_size"]; ?>
                                                                        </p>
                                                                    </td>
                                                                </tr>

                                                    <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <h1 id="header_view">SKILLS</h1>

                                                <?php
                                                $education = "SELECT * FROM `skills` WHERE userid=" . $userid;
                                                $ed = $conn->query($education);
                                                $count = mysqli_num_rows($ed);
                                                // if ($count == 0) {
                                                ?>
                                                    <!-- //     <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=skills_show" class="addx"> -->
                                                    <!-- <span class="nav-item">Logout</span> -->
                                                    <!-- //         ADD -->
                                                    <!-- //     </a> -->
                                                <?php
                                                // } else if ($count != 0) {
                                    
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
                                                                            <th><span style="padding:20 20px;">S. No</span></th>
                                                                            <th><span style="padding:20 70px;">Skill</span></th>
                                                                            <th><span style="padding:20 20px;">Rating</span></th>
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
                                                                                    <p style="padding:10 70px;">
                                                                                <?php echo $row["skill_name"]; ?>
                                                                                    </p>
                                                                                </td>
                                                                                <td style="padding:10 40px;">
                                                                                    <p>
                                                                                <?php echo $row["rating"] . " / 5";

                                                                                // 
                                                                
                                                                                ?>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>

                                                                <?php //}        
                                                                    }
                                } ?>
                                                            </tbody>
                                                        </table>

                                                        <!-- /////////////////////////////////////////////////////////// -->
                                                        <!-- <a href="javascript:void(0)" class="btn-download"><button class="butt">DOWNLOAD</button> -->
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
                        </div>
                        <!-- <input type="text" id="cv_name"> -->

                    </div>
                    <a href="javascript:void(0)" class="btn-download"><button class="butt">DOWNLOAD</button> </a>
                </div>


                <script src="../js/jspdf.js"></script>
                <script src="../js/html2canvas.js"></script>
                <script src="../js/html2pdf.js"></script>


                <script>

                    const options = {
                        margin: 0,
                        filename: 'CV.pdf',
                        image: {
                            type: 'png',
                            quality: 50
                        },
                        html2canvas: {
                            scale: 5
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'A4',
                            orientation: 'portrait'
                        }
                    }

                    $('.btn-download').click(function (e) {
                        e.preventDefault();
                        const element = document.getElementById('cv');
                        html2pdf().from(element).set(options).save();
                    });

                </script>