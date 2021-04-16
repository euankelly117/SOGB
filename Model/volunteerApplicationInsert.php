<?php

include_once 'api.php';
						
			
			$Club 				= $_POST['soClub'];
			$Region 			= $_POST['soRegion'];
			$Forename 			= $_POST['forename'];
			$PrefName			= $_POST['prefName'];
			$Surname 			= $_POST['surname'];
			$Dob 				= $_POST['dob'];
			$Gender 			= $_POST['gender'];
			$Address 			= $_POST['address'];
			$Postcode 			= $_POST['postcode'];
			$Email 				= $_POST['email'];
			$Phone	 			= $_POST['phone'];
			$Roles	 			= "Roles";
			$PreviousExperience = $_POST['previousExperience'];
			$ExperienceDetails	= $_POST['experienceDetails'];
			$Qualifications		= $_POST['qualifications'];
			
			$Forename1			= $_POST['forename1'];
			$Surname1 			= $_POST['surname1'];
			$Address1 			= $_POST['address1'];
			$Postcode1 			= $_POST['postcode1'];
			$Email1				= $_POST['email1'];
			$Phone1	 			= $_POST['phone1'];
			$Relationship1		= $_POST['relationship1'];
			
			$Forename2			= $_POST['forename2'];
			$Surname2 			= $_POST['surname2'];
			$Address2 			= $_POST['address2'];
			$Postcode2 			= $_POST['postcode2'];
			$Email2				= $_POST['email2'];
			$Phone2	 			= $_POST['phone2'];
			$Relationship2		= $_POST['relationship2'];
			

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
			INSERT INTO so_volunteerApplicants(
			va_club,
			va_region,
			va_forename,
			va_prefName,
			va_surname,
			va_dob,
			va_gender,
			va_address,
			va_postcode,
			va_email,
			va_phone,
			va_roles,
			va_experience,
			va_experienceDetails,
			va_qualifications,
			va_ref1Forename,
			va_ref1Surname,
			va_ref1Address,
			va_ref1Postcode,
			va_ref1Email, 
			va_ref1Phone,
			va_ref1Relationship,
			va_ref2Forename,
			va_ref2Surname,
			va_ref2Address,
			va_ref2Postcode,
			va_ref2Email,
			va_ref2Phone,
			va_ref2Relationship)
			VALUES(
			:club,
			:region,
			:forename,
			:prefName,
			:surname,
			:dob,
			:gender,
			:address,
			:postcode,
			:email,
			:phone,
			:roles,
			:experience,
			:experienceDetails,
			:qualifications,
			:forename1,
			:surname1,
			:address1,
			:postcode1,
			:email1,
			:phone1,
			:relationship1,
			:forename2,
			:surname2,
			:address2,
			:postcode2,
			:email2, 
			:phone2,
			:relationship2)
			");
			$success = $query->execute([
			'club' 				=> $Club,
			'region' 			=> $Region,
			'forename' 			=> $Forename,
			'prefName'   		=> $PrefName,
			'surname' 			=> $Surname,
			'dob' 				=> $Dob,
			'gender' 			=> $Gender,
			'address'			=> $Address,
			'postcode'			=> $Postcode,
			'email' 			=> $Email,
			'phone'				=> $Phone,
			'roles' 			=> $Roles,
			'experience' 		=> $PreviousExperience,
			'experienceDetails' => $ExperienceDetails,
			'qualifications' 	=> $Qualifications,
			'forename1' 		=> $Forename1,
			'surname1' 			=> $Surname1,
			'address1' 			=> $Address1,
			'postcode1' 		=> $Postcode1,
			'email1' 			=> $Email1,
			'phone1' 			=> $Phone1,
			'relationship1' 	=> $Relationship1,
			'forename2' 		=> $Forename2,
			'surname2' 			=> $Surname2,
			'address2' 			=> $Address2,
			'postcode2' 		=> $Postcode2,
			'email2' 			=> $Email2,
			'phone2' 			=> $Phone2,
			'relationship2'  	=> $Relationship2,		
			]);
			//header("Location:../View/index.php"); /* Redirect browser */
			//exit();
			echo 	"</br>".$Club 				;
			echo 	"</br>".$Region 			;
			echo 	"</br>".$Forename 			;
			echo 	"</br>".$PrefName			;
			echo 	"</br>".$Surname 			;
			echo 	"</br>".$Dob 			;
			echo 	"</br>".$Gender 		;
			echo 	"</br>".$Address 		;
			echo 	"</br>".$Postcode 	;
			echo 	"</br>".$Email 		;
			echo 	"</br>".$Phone	 	;	
			echo 	"</br>".$Roles	 	;		
			echo 	"</br>".$PreviousExperience;
			echo 	"</br>".$ExperienceDetails	;
			echo 	"</br>".$Qualifications		;
			
			echo 	"</br>".$Forename1		;
			echo 	"</br>".$Surname1 		;
			echo 	"</br>".$Address1 		;
			echo 	"</br>".$Postcode1 		;
			echo 	"</br>".$Email1			;
			echo 	"</br>".$Phone1	 		;	
			echo 	"</br>".$Relationship1	;
			
			echo 	"</br>".$Forename2		;
			echo 	"</br>".$Surname2 	;
			echo 	"</br>".$Address2 	;	
			echo 	"</br>".$Postcode2 	;		
			echo 	"</br>".$Email2		;
			echo 	"</br>".$Phone2	 ;
			echo 	"</br>".$Relationship2	;

?> 
<!DOCTYPE html >  
<head>          
    <title></title>
</head> 
<body> 
    
</body>
</html>