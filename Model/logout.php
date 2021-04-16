<?php

include_once 'dbconnection.php';
include_once 'api.php';
						
			setcookie("so_user", "", time() - 3600, "/");
			
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