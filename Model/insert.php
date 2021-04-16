<?php

include_once 'api.php';
			
			
			$F_Name 			= $_POST['forename'];
			$L_Name 			= $_POST['surname'];
			$Profile_pic		= $_POST['picture'];
			$Email 				= $_POST['email'];
			$Membership_Type	= $_POST['type'];
			$Dob				= $_POST['dob'];
			$Password 			= $_POST['password'];
			$ConfirmPassword 	= $_POST['confirmPassword'];
			$response = $_POST["g-recaptcha-response"];
			
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$data = array(
				'secret' => 'YOUR_SECRET',
				'response' => $_POST["g-recaptcha-response"]
			);
			$options = array(
				'http' => array (
				'method' => 'POST',
				'content' => http_build_query($data)
				)
			);
			$context  = stream_context_create($options);
			$verify = file_get_contents($url, false, $context);
			$captcha_success=json_decode($verify);
			if ($captcha_success->success==false) {
				header("Location:../View/index.php");
			}
			
			if (strcmp($Password,$ConfirmPassword)!=0){
				header("Location:../View/index.php");
			}
			
			$passwordHash = password_hash($Password, PASSWORD_DEFAULT);
			$query = $con->prepare("
			insert into so_user (u_forename, u_surname, u_email, u_password, u_dob, u_membershiptype, u_profilepicture)
			VALUES (:fname, :lname, :email, :password, :dob, :membershiptype, :profilepicture)
			");
			$success = $query->execute([
			'fname' 			=> $F_Name,
			'lname' 			=> $L_Name,
			'email' 			=> $Email,
			'dob' 				=> $Dob,
			'membershiptype' 	=> $Membership_Type,
			'profilepicture' 	=> $Profile_pic,
			'password' 			=> $passwordHash,
			]);
			header("Location:../Controller/LoginForm.php"); /* Redirect browser */
			exit();

?> 
<!DOCTYPE html >  
<head>          
    <title></title>
</head> 
<body> 
    
</body>
</html>