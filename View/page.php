<?php

include_once "../Model/api.php";

$id = $_GET['id'];

$result = getPage($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="../Model/sogbcss.css" rel="stylesheet" type="text/css">
	<title>Special Olympics - Great Britain</title>
<script type="text/javascript" src="../Model/sogbjs.js"></script>

</head>
<body>
<div class="bg-danger">


<!-- Navbar -->


<nav class="navbar navbar-expand-lg navbar-light" style="background: #FFFFFF"> <img src="images/logo-40yrs.jpg" class="img-fluid rounded float-left" alt=""/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  </div>
</nav>



<!-- Jumbotron-->

<div class="row align-items-center mx-auto">
	
		<div class="jumbotron text-center bg-danger text-white h-100 w-100 d-inline-block" style = "border-radius:0;">
			<?php echo "<h1>".$result[0]['p_title']."</h1>"; ?>
			<?php echo "<p>".$result[0]['p_description']."</p>"; ?>
		</div>
	
</div>

</br>


<!-- Social Media Links -->

<div class="row mx-auto">
	<div class="col-md-6 text-center">
		<div class="card">
			<div class="card-body">
				<h3>Connect with <strong>us</strong></h3>
				<a href="https://www.facebook.com/SpecialOlympicsGB" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/SOGreatBritain" target="_blank" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
				<a href="https://www.youtube.com/channel/UC9Jn75RdSEDGrVp0YQdDlxA" target="_blank" class="btn-social btn-youtube"><i class="fa fa-youtube"></i></a>
				<a href="https://www.instagram.com/specialolympicsgb/" target="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</div>
	<div class="text-center col-md-6">
		<div class="card">
			<div class="card-body">
				<h3>Our <strong>Partners</strong></h3>
		  
			</div>
		</div>
	</div>
</div>


<!-- footer -->
<footer class="page-footer bg-black font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
    <div class="row">      
      <hr class="clearfix w-100 d-md-none pb-3">
      
		<div class="col-md-2 mb-md-0 mb-3">
			<h5 class="text-uppercase">Who We Are</h5>
			<ul class="list-unstyled">
				<li>
					<a href="#!">Link 1</a>
				</li>
				<li>
					<a href="#!">Link 2</a>
				</li>
				<li>
					<a href="#!">Link 3</a>
				</li>
				<li>
					<a href="#!">Link 4</a>
				</li>
			</ul>
		</div>
		
		<div class="col-md-2 mb-md-0 mb-3">
			<h5 class="text-uppercase">Resources</h5>
			<ul class="list-unstyled">
				<li>
					<a href="#!">Link 1</a>
				</li>
				<li>
					<a href="#!">Link 2</a>
				</li>
				<li>
					<a href="#!">Link 3</a>
				</li>
				<li>
					<a href="#!">Link 4</a>
				</li>
			</ul>
		</div>
		
		<div class="col-md-2 mb-md-0 mb-3">
			<h5 class="text-uppercase">Related Sites</h5>
			<ul class="list-unstyled">
				<li>
					<a href="#!">Link 1</a>
				</li>
				<li>
					<a href="#!">Link 2</a>
				</li>
				<li>
					<a href="#!">Link 3</a>
				</li>
				<li>
					<a href="#!">Link 4</a>
				</li>
			</ul>
		</div>
		
		<div class="col-md-2 mb-md-0 mb-3">
			<h5 class="text-uppercase">Media</h5>
			<ul class="list-unstyled">
				<li>
					<a href="#!">Link 1</a>
				</li>
				<li>
					<a href="#!">Link 2</a>
				</li>
				<li>
					<a href="#!">Link 3</a>
				</li>
				<li>
					<a href="#!">Link 4</a>
				</li>
			</ul>
		</div>
		
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
</footer>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>