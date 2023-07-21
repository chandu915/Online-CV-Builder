<?php
	// I have to initialize the variables i am using in my code.
	$emailV = null;	
	$passwordV = null; 	
	$CpasswordV = null; 	
	$email_error = null;  
	$password_error = null;
	$Cpassword_error = null; 
	$success = null;

	// sign_up_db.php
	// onsubmit="return validate()"

	// First of all i have to check for the incoming post request.
	if(isset($_POST['sign-up'])){
		// If there is a post request, i will store the username and password values to variables.
		$emailV = $_REQUEST['email'];
		$passwordV = $_POST['pwd'];
		$CpasswordV = $_POST['cpwd'];

		// Next i will check for empty values so i have some kind of error to display.
		if(empty(trim($emailV))){
			// If there is an empty value i display an error message.
			$email_error = "Email is empty";
		}else{
			// If the username has a value, then i move on to the password field.
			if(empty(trim($passwordV))){
				$password_error = "Password is empty";
			}else{
				// If both fields have values i display the success message.
				$success = "Thank you for your registration";
			}
		}
	}

	