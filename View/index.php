<?php

include_once "../Model/api.php";
$pages = getAllPages();
$articles = getAllArticles();

?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <ul class="navbar-nav mr-auto rounded mx-auto">
	
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          What We Do
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#our_mission">Our Mission</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" data-toggle="modal" data-target="#intellectual_disability">What is an Intellectual Disability</a>
        </div>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Get Involved
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" data-toggle="modal" data-target="#become_an_athlete">Become an Athlete</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#athlete_journeys">Athlete Journeys</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" data-toggle="modal" data-target="#families">Families</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#become_a_volunteer">Become a Volunteer</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#volunteer_journeys">Volunteer Journeys</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#become_a_coach">Become a Coach</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#become_an_official">Become an Official</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#donations">Make a Donation</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#nearest_club">Finding your Nearest Club</a>
        </div>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#matp">Motor Activities Training Programme</a>
        </div>
      </li>

		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Competitions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#competition_pathway">Competition Pathway</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#wg_2019">World Games 2019</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#national_games">National Games</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#nas_2020">National Alpine Skiing 2020</a>
        </div>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Special Programmes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#unified_sports">Unified Sports</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#athlete_leadership">Athlete Leadership</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#young_athletes">Young Athletes</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#unified">Unified</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#healthy_athletes">Healthy Athletes</a>
        </div>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Support our Work
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#individual_giving">Individual Giving</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#trusts_and_foundations">Trusts & Foundations</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#corporate_partnerships">Corporate Partnerships</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" data-toggle="modal" data-target="#partners">Our Partners</a>
        </div>
      </li>
	  
	  <li>
		<form class="form-inline" action="https://cafdonate.cafonline.org/549#!/DonationDetails#%2FDonationDetails">
			<button class="btn btn-outline-danger" type="submit">Donate</button>
		</form>
	  </li>
	  
	  <li>
	  <?php
		if(!isset($_COOKIE["so_user"])) {
			echo "<li><a class=\"nav-link\" href=\"../Controller/LoginForm.php\"> Log In </a></li><li><a class=\"nav-link\" href=\"../Controller/RegistrationForm.php\"> Register </a></li>";
		} else {
			echo "<li class=\"nav-item dropdown\">";
				echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">".getName($_COOKIE["so_user"])."</a>";
				echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">";
					echo "<a class=\"dropdown-item\" href=\"QRScanner.php\"> QR Code Scanner </a>";
					echo "<div class=\"dropdown-divider\"></div>";
					echo "<a class=\"dropdown-item\"data-toggle=\"modal\" data-target=\"#qr_code_display\"> Display QR Code </a>";
					echo "<div class=\"dropdown-divider\"></div>";
					echo "<a class=\"dropdown-item\" href=\"../Model/logout.php\"> log out </a>";
				echo "</div>";
			echo "</li>";
		}
	  ?>
	  </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<!-- Carousel / Jumbotron *HEIGHT FIX*-->

<div class="row align-items-center mx-auto">
	<div class="col-8 mb-10 p-0">
	
		<div id="imageCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/3.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	
	</div>
	
	<div class="col-4 p-0">
		<div class="jumbotron text-center bg-danger text-white h-100 d-inline-block" style = "border-radius:0;">
			<h1>Special Olympics Great Britain</h1>
			<p>Special Olympics global campaign inspired by a simple principle: training together and playing together is a quick path to understanding, acceptance and friendship, breaking down the barriers that exist for people with an Intellectual Disability</p>
		</div>
	</div>
</div>

</br>
<!-- Twitter Feed / Video -->

<div class="row align-items-center mx-auto">
	<div class="col-4">
	
		<a class="twitter-timeline" data-height="600" href="https://twitter.com/SOGreatBritain?ref_src=twsrc%5Etfw">Tweets by SOGreatBritain</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		
	</div>
	
	<div class="col-8">
		
		<div id="videoCarousel" class="carousel slide rounded" data-interval="false">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zfCer7h6p8U" allowfullscreen></iframe>
					</div>					
				</div>
				<div class="carousel-item">
				<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F-nsRPv2PYM" allowfullscreen></iframe>
					</div>
				</div>
				<div class="carousel-item">
				<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n8j-H1s2WRY" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
	</div>
</div>


<!-- News Feed *Put articles in database - fix design* -->

<div class="container-fluid">
	  <h1 class="text-center mb-3">Latest News</h1>
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
	<?php 
	$i = 1;
	foreach($articles as $a){
		
	
    if ($i%3 == 1){echo "<div class=\"carousel-item ";}
	if ($i == 1){
		echo "active ";
	}
	if ($i%3 == 1){echo "\"><div class=\"card-deck\">";}
	
    echo "    <div class=\"card h-80\">";
    echo "      <img class=\"card-img-top\" src=\"".$a[a_image]."\" alt=\"Card image cap\">";
    echo "      <div class=\"card-body\">";
    echo "       <a data-toggle=\"modal\" data-target=\"#".$a[a_id]."\"><h4 class=\"card-title\">".$a[a_title]."</h4></a>";
    echo "        <p class=\"card-text\"></p>";
    echo "        <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>";
    echo "      </div>";
    echo "    </div>";
	
    if ($i%3 == 0){echo "</div></div>";}
	
	$i++;  
	}
	if ($i%3 == 2 || $i%3 == 0){echo "</div></div>";}
	  ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</br>


<!-- Social Media Links -->

<div class="row mx-auto">
	<div class="col-md-6 text-center">
		<div class="card h-100">
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
		<div class="card h-100">
			<div class="card-body">
				<h3>Our <strong>Partners</strong></h3>
		  
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
							<img class="d-block w-20 mx-auto" src="https://www.specialolympicsgb.org.uk/uploads/partners/coca-gb.jpg" alt="First slide">
							<img class="d-block w-20 mx-auto" src="https://www.specialolympicsgb.org.uk/uploads/Logos/For%20website.png" alt="Second slide">
							<img class="d-block w-20 mx-auto" src="https://www.specialolympicsgb.org.uk/uploads/Logos/For%20Website-%20Mits.jpg" alt="Third slide">
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
							<img class="d-block w-20 mx-auto" src="https://www.specialolympicsgb.org.uk/uploads/partners/jpeg%20colour%20-%20HOME%20PAGE.jpg" alt="Fourth slide">
							<img class="d-block w-20 mx-auto" src="https://www.specialolympicsgb.org.uk/uploads/partners/united_airlines_4p_stacked_4c_r%20-%20HOME%20SCREEN.jpg" alt="Fifth slide">
							<img class="d-block w-20 mx-auto" src="https://www.specialolympicsgb.org.uk/uploads/partners/lions.jpg" alt="Sixth slide">
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>



		
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    Abertay University: Yearning for Excellence in Environments of Technology
  </div>
</footer>

<?php
foreach($pages as $p){
	echo "<div id=\"".$p[p_id]."\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
	  
		<h4 class=\"modal-title text-center\">".$p[p_title]."</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
      </div>
      <div class=\"modal-body\">
		<h3>".$p[p_description]."</h3>
		</br>
        ".$p[p_content]."
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>";
}

foreach($articles as $a){
	echo "<div id=\"".$a[a_id]."\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
	  
		<h4 class=\"modal-title text-center\">".$a[a_title]."</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
      </div>
      <div class=\"modal-body\">
        ".$a[a_content]."
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>";
}

if(isset($_COOKIE["so_user"])){
	echo "<div id=\"qr_code_display\" class=\"modal fade\" role=\"dialog\">
			<div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg\">
				<div class=\"modal-content\">
					<div class=\"modal-header\">
	  
						<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
					</div>
					<div class=\"modal-body\">
						<img src=\"https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$_COOKIE["so_user"]."&choe=UTF-8\" title=\"".$_COOKIE["so_user"]."\" class=\"rounded mx-auto d-block\" />		
					</div>
					<div class=\"modal-footer\">
						<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
					</div>
				</div>

			</div>
		</div>";
}
?>


</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>