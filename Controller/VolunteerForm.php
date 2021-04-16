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
		<div class="bg-secondary">
		<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-light" style="background: #FFFFFF"> 
				<img src="../View/images/logo-40yrs.jpg" class="img-fluid rounded float-left" alt="">
			</nav>
			
		</br>
		<!-- Form -->
		<div style = "width: 90%; display: block; margin: auto;">
			<form action="../Model/volunteerApplicationInsert.php" method="post">
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
					<label for="prefName"> Preferred Name </label>
					<input type="text" class="form-control" name="prefName" placeholder="Preferred Name" required>
					<label for="Surname"> Surname </label>
					<input type="text" class="form-control" name="surname" placeholder="Surname" required>
				</div>
				<div class="form-group">
					<label for="dob">Date of Birth:</label>
					<input type="date" class="form-control" id="dob" name="dob">
				</div>
				<div class="form-group">
					<label for="gender">Gender</label>
					<input list="types" name="gender" class="form-control">
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
					<label for="address">Address</label>
					<input type="text" class="form-control" name="address" placeholder="Address" required>
					<label for="postcode">Postcode</label>
					<input type="text" class="form-control" name="postcode" placeholder="Postcode" required>
					<label for="email">Email address</label>
					<input type="email" class="form-control" name="email" placeholder="Enter email" required>
					<label for="phone">Phone Number</label>
					<input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
				</div>
				</fieldset>
				<fieldset>
				<legend> Your Role </legend>
				<div class="form-group">
					<p><b>What is/will be your role/s with Special Olympics? </b>(please check all that apply)</p>
					<div class="row">
					
						<div class="col-4">
							<input type="checkbox" id="headCoach" name="headCoach" value="true">
							<label for="headCoach"> Head Coach *</label>
							<br>
							<input type="checkbox" id="coach" name="coach" value="true">
							<label for="coach">Coach * </label>
							<br>
							<label for="coachSports">*Please Specify sports(s)</label>
							<input type="text" class="form-control" name="coachSports" placeholder="">
							
							<input type="checkbox" id="oneToOne" name="oneToOne" value="true">
							<label for="oneToOne"> Athlete 1 to 1 Support/Carer</label>
							<br>
							<input type="checkbox" id="escort" name="escort" value="true">
							<label for="escort">Athlete Escort</label>
							<br>
							<input type="checkbox" id="firstAid" name="firstAid" value="true">
							<label for="firstAid"> First Aid / Medical</label>
							<br>
							<input type="checkbox" id="driver" name="driver" value="true">
							<label for="driver">Driver</label>
							<br>
						</div>
					
						<div class="col-4">
							<input type="checkbox" id="generalCoachingSupport" name="generalCoachingSupport" value="true">
							<label for="generalCoachingSupport"> General Coaching Support</label>
							<br>
							<input type="checkbox" id="generalEvents" name="generalEvents" value="true">
							<label for="generalEvents"> General Events</label>
							<br>
							<input type="checkbox" id="media" name="media" value="true">
							<label for="media">Media / PR</label>
							<br>
							<input type="checkbox" id="sportsOfficial" name="sportsOfficial" value="true">
							<label for="sportsOfficial"> Sports Official</label>
							<br>
							<input type="checkbox" id="administration" name="administration" value="true">
							<label for="administration">Administration</label>
							<br>
							<input type="checkbox" id="fundraiser" name="fundraiser" value="true">
							<label for="fundraiser">Fundraiser</label>
							<br>
							<label for="other">Other (Please Specify)</label>
							<input type="text" class="form-control" name="other" placeholder="">
						</div>
					
						<div class="col-4">
							<p> Steering Group Member </p>
							<input type="checkbox" id="mainContact" name="mainContact" value="true">
							<label for="mainContact"> Main Contact</label>
							<br>
							<input type="checkbox" id="financeOfficer" name="financeOfficer" value="true">
							<label for="financeOfficer"> Finance Officer</label>
							<br>
							<input type="checkbox" id="safeguardingOfficer" name="safeguardingOfficer" value="true">
							<label for="safeguardingOfficer">Safeguarding and Wellfare Officer</label>
							<br>
							<input type="checkbox" id="elegibility" name="elegibility" value="true">
							<label for="elegibility">Eligibility Officer</label>
							<br>
							<input type="checkbox" id="volunteerCoordinator" name="volunteerCoordinator" value="true">
							<label for="volunteerCoordinator"> Volunteer Coordinator</label>
							<br>
							<input type="checkbox" id="competitionCoordinator" name="competitionCoordinator" value="true">
							<label for="competitionCoordinator">Competition Coordinator</label>
						</div>
						
					</div>
				</div>
				</fieldset>
				
				<fieldset>
				<legend> Past Experience </legend>
				<div class="form-group">
					<input type="checkbox" id="previousExperience" name="previousExperience" value="yes">
					<label for="previousExperience"> Please check if you have previous experience working with children and/or adults with a disability in a voluntary or professional capacity</label></br>
					<label for="experienceDetails">If yes, please give brief details below</label>
					<input type="text" class="form-control" id="experienceDetails" name="experienceDetails">
				</div>
				</fieldset>
				
				<fieldset>
				<legend> Relevent Qualifications / Training </legend>
				<div class="form-group">
					<p> This section <b>MUST</b> be filled out by all coaches, e.g. Coaching Awards, Training Courses, First-Aid Certificates, etc. </p>
					<textarea class="form-control" id="qualifications" name="qualifications"> </textarea>
				</div>
				</fieldset>
				
				<fieldset>
				<legend> References </legend>
				<p> Reference One </p>
				<div class="form-group">
					<label for="Forename1"> First Name </label>
					<input type="text" class="form-control" name="forename1" placeholder="First Name" required>
					<label for="Surname1"> Surname </label>
					<input type="text" class="form-control" name="surname1" placeholder="Surname" required>
					<label for="Address1">Address</label>
					<input type="text" class="form-control" name="address1" placeholder="Address" required>
					<label for="postcode1">Postcode</label>
					<input type="text" class="form-control" name="postcode1" placeholder="Postcode" required>
					<label for="Email1">Email address</label>
					<input type="email" class="form-control" name="email1" placeholder="Enter email" required>
					<label for="phone1">Phone Number</label>
					<input type="text" class="form-control" name="phone1" placeholder="Phone Number" required>
					<label for="relationship1">Relationship to You</label>
					<input type="text" class="form-control" name="relationship1" placeholder="" required>
				</div>
				<p> Reference Two </p>
				<div class="form-group">
					<label for="Forename2"> First Name </label>
					<input type="text" class="form-control" name="forename2" placeholder="First Name" required>
					<label for="Surname2"> Surname </label>
					<input type="text" class="form-control" name="surname2" placeholder="Surname" required>
					<label for="Address2">Address</label>
					<input type="text" class="form-control" name="address2" placeholder="Address" required>
					<label for="postcode2">Postcode</label>
					<input type="text" class="form-control" name="postcode2" placeholder="Postcode" required>
					<label for="Email2">Email address</label>
					<input type="email" class="form-control" name="email2" placeholder="Enter email" required>
					<label for="phone2">Phone Number</label>
					<input type="text" class="form-control" name="phone2" placeholder="Phone Number" required>
					<label for="relationship2">Relationship to You</label>
					<input type="text" class="form-control" name="relationship2" placeholder="" required>
				</div>
				</fieldset>
				
				<fieldset>
				<legend> Terms and Conditions </legend>
				<div class = "form-group">
					<input type="checkbox" id="terms" name="terms" value="yes" required>
					<label for="terms"> I have read and agree to the terms of the Code of Conduct Declaration, and Data Protection Acknowledgments</label></br>
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
				<div class="container bg-secondary text-white">Copyright &copy; Your Website</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>