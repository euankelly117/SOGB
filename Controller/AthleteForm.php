<!DOCTYPE html>
<?php
	require '../Model/api.php';	
?>
<html style="height:100%;">

	<head>
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity=	"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="../Model/sogbcss.css" rel="stylesheet" type="text/css">
		<title>Special Olympics - Great Britain - Athlete Membership Form</title>
		<script type="text/javascript" src="../Model/sogbjs.js"></script>
		
	</head>
		
		
	<body style="height:100%;">
		<div class="bg-secondary">
		<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-light" style="background: #FFFFFF"> 
				<img src="../View/images/logo-40yrs.jpg" class="img-fluid rounded float-left" alt="">
			</nav>
			
		</br>
		<!-- Form -->
		<div style = "width: 90%; display: block; margin: auto;">
			<form action="../Model/athleteApplicationInsert.php" method="post">
			<fieldset>
				<legend> Club Details </legend>
				<div class="form-group">
					<label for="soClub"> Special Olympics Club </label>
					<input type="text" class="form-control" name="soClub" placeholder="Club" required>
					<label for="soRegion"> Special Olympics Region </label>
					<input type="text" class="form-control" name="soRegion" placeholder="Region" required>
				</div>
				</fieldset>
				<fieldset>
				<legend> Personal Details </legend>
				<div class="form-group">
					<label for="Forename"> First Name </label>
					<input type="text" class="form-control" name="forename" placeholder="First Name" required>
					<label for="Surname"> Surname </label>
					<input type="text" class="form-control" name="surname" placeholder="Surname" required>
				</div>
				<div class="form-group">
					<label for="dob">Date of Birth:</label>
					<input type="date" class="form-control" id="dob" name="dob">
				</div>
				<div class="form-group">
					<label for="Gender">Gender</label>
					<input list="types" name="Gender" class="form-control">
					<datalist id="types">
						<option value="Male">
						<option value="Female">
						<option value="Other (Please Specify)">
					</datalist>
				</div>
				</fieldset>
				</br>
				<fieldset>
				<legend> Contact Details </legend>
				<div class="form-group">
					<label for="Address">Address</label>
					<input type="text" class="form-control" name="Address" placeholder="Address" required>
					<label for="postcode">Postcode</label>
					<input type="text" class="form-control" name="postcode" placeholder="Postcode" required>
					<label for="Email">Email address</label>
					<input type="email" class="form-control" name="email" placeholder="Enter email" required>
				</div>
				<div class="form-group">
					<label for="pgName">Name of Parent or Guardian</label>
					<input type="text" class="form-control" name="pgName" placeholder="Name" required>
					<label for="pgPhone">Parent or Guardian's Phone Number</label>
					<input type="text" class="form-control" name="pgPhone" placeholder="Phone Number" required>
					<label for="pgEmail">Parent or Guardian's Email address</label>
					<input type="email" class="form-control" name="pgEmail" placeholder="Enter email" required>
				</div>
				</fieldset>
				<fieldset>
				<legend> Sports </legend>
				<div class="form-group">
					<label for="sports">Please enter all sports you would like to <b> regularly </b> compete in</label>
					<input type="text" class="form-control" id="sports" name="sports">
				</div>
				<div class="form-group">
					<input type="checkbox" id="unifiedSportsPlayer" name="unifiedSportsPlayer" value="yes">
					<label for="unifiedSportsPlayer"> I am a unified Sports Player</label></br>
					<label for="unifiedSports">Which unified sport will you take part in from the list above?</label>
					<input type="text" class="form-control" id="unifiedSports" name="unifiedSports">
				</div>
				</fieldset>
				<fieldset>
				<legend> Terms and Conditions </legend>
				<div class = "form-group">
					<input type="checkbox" id="terms" name="terms" value="yes" required>
					<label for="terms"> I have read and agree to the terms of the Athlete/Unified Partner Release Form</label></br>
					<input type="checkbox" id="eligibility" name="eligibility" value="yes" required>
					<label for="elegibility"> I confirm I can provide eligibility evidence detailing athlete's Intellectual Disability</label></br>
				</div>
				</fieldset>
				
				<div class="captcha_wrapper">
					<div class="g-recaptcha" data-sitekey="6LfFP7wUAAAAANhy8VEPhjdTpyWeauBQtTlCHnoa"></div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		</br>
		
		<!-- Footer -->
			<div class="footer fixed-bottom text-center">
				<div class="container bg-secondary text-white">Copyright &copy; Special Olympics Great Britain</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>