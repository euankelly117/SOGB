<?php

require 'api.php';
			
			$Email 				= $_POST['email'];
			$Password 			= $_POST['password'];
			$passwordHash   	= password_hash($Password, PASSWORD_DEFAULT);
			$actualPassword 	= getPassword($Email);
			
			if (strcmp($passwordHash,$actualPassword)!=0){
				header("Location:../View/index.php");
			}
			
			setcookie("so_user", $Email, time() + (86400 * 30), "/");
			
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