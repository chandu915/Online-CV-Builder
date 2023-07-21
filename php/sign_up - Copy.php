<?php require("validation.php") ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/sign_up.css">


<?php
	 	if($email_error != null){
	 		?> <style>.error{display:block}</style> <?php
	 	}
	 	
	 ?> 

<title> Sign Up</title>
</head>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h2>SIGN UP</h2>
            <p>Online CV Builder</p>
            <p class="error">
			      <?php echo $email_error; ?>
            <?php echo $password_error; ?>
            <?php echo $passwordc_error; ?>
            <?php echo $success; ?>
		        </p>
          </div>
        </div>
        <form class="login-form" action="../php/sign_up_db.php" method="POST" onsubmit="return validate();">
          <input type="mail" name="email" id="email" value="<?php echo $emailv; ?>" placeholder="Email*"/>
          <input type="password" name="pwd" id="pwd" value="<?php echo $passwordv; ?>" placeholder="Password*"/>
          <input type="password" name="cpwd" id="cpwd" value="<?php echo $passwordcv; ?>" placeholder="Confirm Password*"/>
          <button type="submit" name="submit-btn" >sign up</button>

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




