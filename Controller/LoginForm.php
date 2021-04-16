<!DOCTYPE html>
<?php
	require '../Model/api.php';	
?>
<html style="height:100%;">
	<head>
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity=	"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="../Model/sogbcss.css" rel="stylesheet" type="text/css">
		<title>Special Olympics - Great Britain - Log In</title>
		<script type="text/javascript" src="../Model/sogbjs.js"></script>
	
	</head>
	<body style="height:100%;">
		<div class="bg-secondary h-100">
		<!-- Jumbotron -->
			<nav class="navbar navbar-expand-lg navbar-light" style="background: #FFFFFF"> 
				<img src="../View/images/logo-40yrs.jpg" class="img-fluid rounded float-left" alt="">
			</nav>
			
		<!-- Form -->
		<div style = "width: 90%; display: block; margin: auto;">
			<form action="../Model/login.php" method="post">
				
				<div class="form-group">
					<label for="Email">Email address</label>
					<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="Password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		
		<!-- Footer -->
			<div class="footer fixed-bottom text-center">
				<div class="container bg-secondary text-white">Copyright &copy; Your Website</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>