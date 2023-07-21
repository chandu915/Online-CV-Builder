<!DOCTYPE html>
<html>

<head>
	<title>Database</title>
</head>

<body>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "awp");
		
		if($conn === false){
			die("Not Connected to . "
				. mysqli_connect_error());
		}
		
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		//$gender = $_REQUEST['gender'];
        $gender="Male";
        $email = $_REQUEST['email'];
        $phn = $_REQUEST['phn'];
        $dob = $_REQUEST['date'];
		$addr = $_REQUEST['addr'];
		$country = $_REQUEST['country'];


		$sql = "INSERT INTO user VALUES ('$fname','$lname','$gender','$email','$phn','$dob','$addr','$country')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Successfully Done!</h3>";

		} else{
			echo "Sorry!";
		}
		
		mysqli_close($conn);
		?>

</body>

</html>
