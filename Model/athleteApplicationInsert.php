<?php

include_once 'api.php';
			
			
			$Club 				= $_POST['soClub'];
			$Region 			= $_POST['soRegion'];
			$Forename 			= $_POST['forename'];
			$Surname 			= $_POST['surname'];
			$Dob 				= $_POST['dob'];
			$Gender 			= $_POST['Gender'];
			$Address 			= $_POST['Address'];
			$Postcode 			= $_POST['postcode'];
			$Email 				= $_POST['email'];
			$PgName 			= $_POST['pgName'];
			$PgPhone 			= $_POST['pgPhone'];
			$PgEmail 			= $_POST['pgEmail'];
			$Sports 			= $_POST['sports'];
			$Unified 			= $_POST['unifiedSportsPlayer'];
			$UnifiedSport		= $_POST['unifiedSports'];
			$Terms	 			= $_POST['terms'];
			$Eligibility		= $_POST['eligibility'];

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
				//header("Location:../View/index.php");
			}
			
			$passwordHash = password_hash($Password, PASSWORD_DEFAULT);
			$query = $con->prepare("
			INSERT INTO so_athleteApplicants(aa_club, aa_region, aa_forename, aa_surname, aa_dob, aa_gender, aa_address, aa_postcode, aa_email, aa_pgName, aa_pgPhone, aa_pgEmail, aa_sports, aa_unified, aa_unifiedSport, aa_terms, aa_eligibility) VALUES (:club,:region,:forename,:surname,:dob,:gender,:address,:postcode,:email,:pgName,:pgPhone,:pgEmail,:sports,:unified,:unifiedSport,:terms,:eligibility)
			");
			$success = $query->execute([
			'club' 			=> $Club,
			'region' 		=> $Region,
			'forename' 		=> $Forename,
			'surname' 		=> $Surname,
			'dob' 			=> $Dob,
			'gender' 		=> $Gender,
			'address' 		=> $Address,
			'postcode' 		=> $Postcode,
			'email' 		=> $Email,
			'pgName' 		=> $PgName,
			'pgPhone' 		=> $PgPhone,
			'pgEmail' 		=> $PgEmail,
			'sports' 		=> $Sports,
			'unified' 		=> $Unified,
			'unifiedSport' 	=> $UnifiedSport,
			'terms' 		=> $Terms,
			'eligibility' 	=> $Eligibility,				
			]);
			header("Location:../View/index.php"); /* Redirect browser */
			exit();

?> 
<!DOCTYPE html >  
<head>          
    <title></title>
</head> 
<body> 
    
</body>
</html>