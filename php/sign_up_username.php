<?php
session_start();
$email = $_SESSION['email'];
$pwd = $_SESSION['pwd'];
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/sign_up.css">
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
                        // session_start();
                        if (!empty($_SESSION['msg'])) {
                            echo "" . $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }

                        ?>
                    </p>
                </div>
            </div>
            <form class="login-form" action="sign_up_db.php" method="POST" onsubmit="return validate();">
                <input type="text" name="uname" id="uname" placeholder="Username*" />
                <div class="btn">
                    <button type="submit" name="submit-btn">sign up</button>
                </div>

            </form>
        </div>
    </div>
</body>




<script>


    function validate() {


        var mail = document.getElementById("email").value;
        let pwd = document.getElementById("pwd").value;
        let cpwd = document.getElementById("cpwd").value;

        var atposition = mail.indexOf("@");
        var dotposition = mail.lastIndexOf(".");

        if (mail == null || mail == "" || atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= mail.length) {
            // alert("Email is empty!");
            document.getElementById("error1").innerHTML = "<span class='error_msg'>Please enter a valid email address</span>";
            document.getElementById("email").style.border = '2px solid #ce0000';
            document.getElementById("pwd").style.border = 'none';
            document.getElementById("cpwd").style.border = 'none';
            return false;
        }
        else {
            if (pwd == null || pwd == "" || pwd.length < 6) {
                document.getElementById("error1").innerHTML = "<span class='error_msg'>Password must be 6 characters</span>";
                document.getElementById("pwd").style.border = '2px solid #ce0000';
                document.getElementById("email").style.border = 'none';
                return false;
            }

            else {
                if (pwd != cpwd) {
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

<?php

// $email = $_REQUEST['email'];
// $pwd = $_REQUEST['pwd'];
$conn = mysqli_connect("localhost", "root", "", "awp_project");
// $_SESSION['email'] = null;


$mail_validation = "SELECT `email` FROM `login_account`";

$mail_val = $conn->query($mail_validation);

while ($row = $mail_val->fetch_assoc()) {
    if ($row["email"] == $email) {
        $_SESSION['msg'] = "<span class='error_msg'>Email already exists</span>";
        header("Location: sign_up.php");
        exit();
    } 
    // else {
    //     $_SESSION['email'] = $email;
    //     $_SESSION['pwd'] = $pwd;
    //     // header("Location: sign_up_username.php");
    // }
}







?>