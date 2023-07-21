<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/sign_up.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Sign Up</title>
</head>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h2>SIGN UP</h2>
            <p>Online CV Builder</p>
            <p class="error" id="error1">
              <?php
              session_start();
              if(!empty($_SESSION['msg'])){
                echo "".$_SESSION['msg'];
                unset($_SESSION['msg']);
              }
              
              ?>
            </p>
          </div>
        </div>
        <form class="login-form" action="sign_up_val.php" method="POST" onsubmit="return validate();">
          <input type="mail" name="email" id="email" placeholder="Email*"/>
          <input type="password" name="pwd" id="pwd" placeholder="Password*"/>
          <input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password*"/>
          <div class="btn">
          <button type="submit" name="submit-btn" >Next</button>
          </div>
          <p class="message">Already have account? <a href="http://localhost/cv/">Sign in</a></p>

        </form>
      </div>
    </div>
</body>
<script>


function validate(){

  
  var mail = document.getElementById("email").value;
  let pwd = document.getElementById("pwd").value;
  let cpwd = document.getElementById("cpwd").value;

  var atposition = mail.indexOf("@");  
  var dotposition = mail.lastIndexOf(".");  

  if(mail==null || mail=="" || atposition<1 || dotposition < atposition+2 || dotposition+2 >= mail.length){
    // alert("Email is empty!");
    document.getElementById("error1").innerHTML = "<span class='error_msg'>Please enter a valid email address</span>";
    document.getElementById("email").style.border = '2px solid #ce0000';
    document.getElementById("pwd").style.border = 'none';
    document.getElementById("cpwd").style.border = 'none';
    return false;
  }
  else {
    if (pwd==null || pwd=="" || pwd.length<6)
  {
    document.getElementById("error1").innerHTML = "<span class='error_msg'>Password must be 6 characters</span>";
    document.getElementById("pwd").style.border = '2px solid #ce0000';
    document.getElementById("email").style.border = 'none';
    return false;
  }

  else{
    if(pwd!=cpwd){
      document.getElementById("error1").innerHTML = "<span class='error_msg'>Passwords must match</span>";
    document.getElementById("pwd").style.border = '2px solid #ce0000';
    document.getElementById("cpwd").style.border = '2px solid #ce0000';
    document.getElementById("email").style.border = 'none';
    return false;
    }
    
  }

  }
  
  
}

</script>

</html>






