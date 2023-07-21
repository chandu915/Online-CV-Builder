<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML TO PDF</title>
	<script src="../js/jquery.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="../css/education_style.css" rel="stylesheet" >
</head>
<body>

<div id="cv_main">

<?php

		$conn = mysqli_connect("localhost", "root", "", "awp_project");
		
		if($conn === false){
			die("Not Connected to . "
				. mysqli_connect_error());
		}
		
		$fname = $_REQUEST['fname'];

    $details = " SELECT * FROM `user_info` WHERE first_name='$fname'";
    $education = "SELECT education.* FROM education INNER JOIN user_info ON education.userid=user_info.userid WHERE user_info.first_name='$fname'";

    $result1 = $conn->query($details);
    $result2 = $conn->query($education);
    
	
		mysqli_close($conn);
		?>

<div id="cv">

<article>
<address class="details">
        <h4>
        <?php
          while($row = $result1->fetch_assoc())
          {
            if($row["middle_name"]!=null){
              echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"];
            }
            else{
              echo $row["first_name"]." ".$row["last_name"];
            }
          ?>
        </h4>
        <p><?php echo $row["personal_mail"]; ?></p>
        <p><?php echo $row["phone"]; ?></p>
        <p><?php echo $row["gender"]; ?></p>
        <p><?php echo $row["dob"]; }?></p>

      </address>
      
</article>
    <header id="headx">
      <h1>EDUCATION</h1>
    </header>

      <table id="education">
        <thead>
          <tr>
            <th><span >S. No</span></th>
            <th><span >Degree</span></th>
            <th><span >Year of Pass</span></th>
            <th><span >Institution</span></th>
            <th><span >Board/University</span></th>
            <th><span >CGPA/Percentage</span></th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sl_no=1;
          while($row = $result2->fetch_assoc())
          {
            ?>
          <tr>
            <td><p><?php echo $sl_no; $sl_no++; ?></p></td>
            <td><p><?php echo $row["degree"]; ?></p></td>
            <td><p><?php echo $row["yop"]; ?></p></td>
            <td><p><?php echo $row["university"]; ?></p></td>
            <td><p><?php echo $row["board"]; ?></p></td>
            <td><p><?php echo $row["cgpa"]; ?></p></td>
          </tr>

          <?php }?>
        </tbody>
      </table>

      <table class="sign">
        <tr>
          <td></td>
        </tr>
      </table>

   
</div>
</div>

<input type="text" id="cv_name">
<a  href="javascript:void(0)" class="btn-download"><button class="butt">DOWNLOAD</button> </a>


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
    
    $('.btn-download').click(function(e){
      e.preventDefault();
      const element = document.getElementById('cv');
      html2pdf().from(element).set(options).save();
    });

    </script>



</body>
</html>