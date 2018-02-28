<?php
	include 'db.php';
	$firstname = $mysqli->escape_string($_POST['firstname']);
	$lastname = $mysqli->escape_string($_POST['lastname']);
	$username = $mysqli->escape_string($_POST['username']);
	$email = $mysqli->escape_string($_POST['email']);
	$phone = $mysqli->escape_string($_POST['phone']);
	$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
	$cpassword = $mysqli->escape_string($_POST['cpassword']);

	//////////////////// Verify the /////////////////////
	$emailresult = $mysqli->query("SELECT * FROM 'users' WHERE email = '$email'");
	$usernameresult = $mysqli->query("SELECT * FROM 'users' WHERE username = '$username'");
	if ($emailresult->num_rows > 0) {
		echo "<script>alert('Email previously inputed has been taken please try a username with some customized digits and UPPERCASES'); window.location='index-register';</script>";
	}elseif ($usernameresult->num_row > 0) {
		echo "<script>alert('Email previously inputed has been taken please try a username with some customized digits and UPPERCASES'); window.location='index-register';</script>";
	}else{
		$sql = "INSERT INTO user (firstname, lastname, username, email, phone, password)" ."VALUES ($firstname, $location, $username, $email, $phone, $password)";
		if ($mysqli->query($sql)) {
			 $_SESSION['active'] = 0; //0 until user activates their account with verify.php
	        $_SESSION['logged_in'] = true; // So we know the user has logged in
	        $_SESSION['message'] =
	                
	                 "Confirmation link has been sent to $email, please verify
	                 your account by clicking on the link in the message!";

	        // Send registration confirmation link (verify.php)
	        $to      = $email;
	        $subject = 'Account Verification ( sparklepaints.com )';
	        $message_body = '
	        Hello '.$first_name.',

	        Thank you for signing up!

	        Please click this link to activate your account:

	        http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;  

	        mail( $to, $subject, $message_body );

        header("location: profile.php"); 
		}
	}
	////////////////////////////////////////////////////
?>
