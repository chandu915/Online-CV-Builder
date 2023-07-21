<?php require("validation.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	 <link rel="stylesheet" href="../css/sign_up.css">

	<title>Sign Up</title>
</head>
<body>

<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h2>SIGN UP</h2>
            <p>Online CV Builder</p>
            <p class="error" id="error1">
			      
		    </p>
          </div>
        </div>
	<form action="sign_up_db.php" method="post" autocomplete="off" onsubmit="return validate()" >
	
  <input type="text" name="email" id="email" value="<?php echo $emailV; ?>" placeholder="Email*"/>
          <input type="password" name="pwd" id="pwd" value="<?php echo $passwordV; ?>" placeholder="Password*"/>
          <input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password*"/>

		  <input type="submit" name="sign-up" value="Sign Up">
	
	</form>

	</div>
    </div>
</body>


<script>


function validate(){

  
  var mail = document.getElementById("email").value;
  var pwd = document.getElementById("pwd").value;
  var cpwd = document.getElementById("cpwd").value;

  if(mail==null || mail==""){
    // alert("Email is empty!");
	document.getElementById("error1").innerHTML = "E1mail is empty";
    return false;
  }
  else if (pwd==null || pwd=="")
  {
    // alert("Password is empty!");
    return false;
  }
}

</script>

</html>	
