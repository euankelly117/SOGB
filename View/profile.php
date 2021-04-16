<?php

	include_once "../Model/api.php";
	$email = $_GET['value'];

	$queryText = "select * from so_user where u_email = '".$email."';";
	global $con;
	$query = $con->query("$queryText");
	$result = $query->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../Model/sogbcss.css" rel="stylesheet" type="text/css">
	<title>YEET - Profile Prototype</title>

</head>
<body>
	<div class="container-fluid bg-secondary">
		<nav class="navbar navbar-expand-lg navbar-light" style="background: #FFFFFF"> 
			<img src="../View/images/logo-40yrs.jpg" class="img-fluid rounded float-left" alt="">
		</nav>
			
		</br>
		
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm">
					<?php echo "<img class=\"img-fluid rounded mx-auto\"src=".$result[0]['u_profilepicture'].">";?>
				</div>
				<div class="col-sm">
					<?php echo "<h1>".$email."</h1>"; ?>
					<?php echo "<p>".$result[0]['u_forename']." ".$result[0]['u_surname']."</p>";?>
					<?php echo "<p>".$result[0]['u_dob']."</p>";?>
					<?php echo "<p>".$result[0]['u_membershiptype']."</p>";?>
				</div>
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>