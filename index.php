<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/login.css">
  <title> Login</title>
</head>

<body id="body">
  <div style="opacity: 0;" id="loading"><span>LOADING...</span></div>
  <div class="login-page">
    <div class="form">
      <div class="login">
        <div class="login-header">
          <h2>LOGIN</h2>
          <p>Online CV Builder</p>
          <p class="error" id="error1">
          <p class="error" id="error1">
            <?php
            session_start();

            if (!empty($_SESSION['msgx'])) {
              echo "" . $_SESSION['msgx'];
              unset($_SESSION['msgx']);
            }
            ?>
          </p>
          </p>
        </div>
      </div>
      <form class="login-form" id="customForm" method="POST" action="./login/login_validation.php"
        enctype="multipart/form-data" onsubmit="return validate()">
        <input type="text" name="uname" id="uname" placeholder="Username" />
        <input type="password" name="pwd" id="pwd" placeholder="Password" />
      </form>
      <button class="button" id="submit"><span class="button__text">login<span></button>
      <br><br>
      <p class="message">Not registered? <a href="http://localhost/cv/php/sign_up.php">Create an account</a></p>

    </div>
  </div>
</body>

<script>
  function validate() {


    var uname = document.getElementById("uname").value;
    let pwd = document.getElementById("pwd").value;

    if (uname == null || uname == "") {
      document.getElementById("error1").innerHTML = "<span class='error_msg'>Please enter username</span>";
      document.getElementById("uname").style.border = '2px solid #ce0000';
      document.getElementById("pwd").style.border = 'none';
      return false;
    }
    if (pwd == null || pwd == "") {
      document.getElementById("error1").innerHTML = "<span class='error_msg'>Please enter password</span>";
      document.getElementById("pwd").style.border = '2px solid #ce0000';
      document.getElementById("uname").style.border = 'none';
      return false;

    }
    if (pwd != null && pwd != "" && uname != null && uname != "") {
      return true;
    }
  }

  function submitForm() {
    document.getElementById("customForm").submit()
  }

  document.getElementById('submit').onclick = function () {
    if (validate()) {
      setTimeout(submitForm, 3000);
    }
  }


</script>
</html>

