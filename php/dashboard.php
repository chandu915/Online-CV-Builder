<?php
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard PHP</title>
  <link rel="stylesheet" href="../css/db.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
  <div class="container">
    <nav>

      <!-- <a href="dashboard.php?page=print1">
        <span class="nav-item">Basic Details</span></a>
  
        <button type="submit" class="bttn" name="basic" id="basic"><i class="fas fa-user"></i><span class="nav-item">Basic Details</span></button>
        <button type="submit" class="bttn">CHANDU</button>
        <button class="bttn">CHANDU</button>
        <button class="bttn">CHANDU</button>
        <button class="bttn">CHANDU</button> -->
      <ul>
        <li>
          <a href="dashboard.php?page=profile">
            <i class="fas fa-user"></i>
            <span class="nav-item">Profile</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=basic_details">
            <i class="fas fa-user"></i>
            <span class="nav-item">Basic Details</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=contact">
            <i class="fas fa-user"></i>
            <span class="nav-item">Contact Details</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=education">
            <i class="fas fa-book"></i>
            <span class="nav-item">Education</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=project">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Projects</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=internship">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Internships</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=workshop">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Workshops</span>
          </a>
        </li>

        <li>
          <a href="dashboard.php?page=experience">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Experience</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=skill">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Skills</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=certification">
            <i class="fas fa-home"></i>
            <span class="nav-item">Certifications</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=settings">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Settings</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php?page=index789">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Help</span>
          </a>
        </li>

        <!-- <a href="logout.php"><button class="logout">Logout</button></a> -->
        <a href="logout.php" class="logout">Logout</a>

      </ul>
    </nav>
  </div>

  <div class="content">
    <?php
    // session_start();
    
    // $get = $_SESSION['page'];
    
    // $set_page = $get . ".php";
    // $set_page = "blank". ".php";
    session_start();

    $get = $_SESSION['page'];
    if (!empty($_GET['page'])) {
      $get = $_GET['page'];
    }

    $set_page = $get . ".php";
    include $set_page;

    // session_start();
    // echo "displaying the username " . $_SESSION['page'];
    
    ?>
  </div>
</body>

</html>