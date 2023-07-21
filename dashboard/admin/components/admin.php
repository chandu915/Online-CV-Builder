<?php
session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PHP</title>
    <link rel="stylesheet" href="../css/db.css" />
    <!-- <link rel="stylesheet" href="../css/demo.css" /> -->
    <!-- <link rel="stylesheet" href="../css/table_import.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <nav>

            <ul>
                <li>
                    <!-- <a href="dashboard.php?page=profile"> -->
                        <span class="admin">
                        <!-- <img src="../images/cutm.png" style="height: 60px;" alt="cutm"> -->
                        <span class="nav-item"><?php echo $_SESSION['name']." ".$_SESSION['uid'];?></span>
                        </span>
                    <!-- </a> -->
                </li>
                <li>
                    <a href="admin.php?page=basic_details_show" class="nav std" id="details">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Basic Details</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?page=education_show" class="nav std" id="ed">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Education</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="admin.php?page=registration" class="nav std">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Experience</span>
                    </a>
                </li> -->
                <li>
                    <a href="admin.php?page=projects_show" class="nav std" id="project">
                        <i class="fas fa-book"></i>
                        <span class="nav-item">Projects</span>
                    </a>
                </li>
            

                <li>
                    <a href="admin.php?page=skills_show" class="nav std" id="skill">
                        <i class="fas fa-gear"></i>
                        <span class="nav-item">Skills</span>
                    </a>
                </li>

                <li>
                    <a href="admin.php?page=resume" class="nav std" id="resume">
                        <i class="fas fa-gear"></i>
                        <span class="nav-item">Resume</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?page=settings" class="nav std">
                        <i class="fas fa-gear"></i>
                        <span class="nav-item">Settings</span>
                    </a>
                </li>
                
                <li>
                    <a href="logout.php" class="logout">
                        <i class="fa fa-sign-out" aria-hidden="true" style="font-size:25px"></i>
                        <span class="nav-item">Logout</span>
                    </a>
                </li>
                <!-- <a href="logout.php" class="logout">Logout</a> -->

            </ul>
        </nav>
    </div>

    <div class="content">
    <?php

    // $get = $_SESSION['page'];
    if (!empty($_GET['page'])) {
        $get = $_GET['page'];

        $set_page = $get . ".php";
        // echo $get;
        include $set_page;
    }
    // include "../components/students.php";   
    ?>
    </div>
</body>

</html>