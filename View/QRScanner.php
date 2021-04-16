<?php

include_once "../Model/api.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="../Model/sogbcss.css" rel="stylesheet" type="text/css">
	<title>Special Olympics - Great Britain - QR Code Scanner</title>
	<script type="text/javascript" src="../Model/sogbjs.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #FFFFFF"> 
	<a href="index.php"><img src="images/logo-40yrs.jpg" class="img-fluid rounded float-left" alt=""/></a>
	</nav>
	
    <div class="rounded mx-auto d-block">
		<video id="preview" width="90%" style="margin:auto;"></video>
	</div>
	
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript">
    var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
    scanner.addListener('scan',function(content){
        //alert(content);
        //window.location.href=content;
		var url = "profile.php?value=".concat(content);
		window.open(url, "frame");
		$("#Modal").modal();
    });
    Instascan.Camera.getCameras().then(function (cameras){
        if(cameras.length>0){
			for (var i = 0;i<cameras.length;i++){
				var radio = document.createElement("input");   // Create a <button> element
				radio.setAttribute('type', 'radio');
				radio.setAttribute('name', 'options');
				radio.setAttribute('value', i+1);
				if(i ==0){
					radio.setAttribute('checked', 'true');
				}
				var count = i+1;
				var text = "camera " + count;
				//document.getElementById("btngroup").append(text);
				document.getElementById("btngroup").appendChild(radio);
			}
            scanner.start(cameras[0]);
            $('[name="options"]').on('change',function(){
                if($(this).val()==1){
                    if(cameras[0]!=""){
                        scanner.start(cameras[0]);
                    }else{
                        alert('No Front camera found!');
                    }
                }else if($(this).val()==2){
                    if(cameras[1]!=""){
                        scanner.start(cameras[1]);
                    }else{
                        alert('No Back camera found!');
                    }
                }else if($(this).val()==3){
                    if(cameras[2]!=""){
                        scanner.start(cameras[2]);
                    }else{
                        alert('No Back camera found!');
                    }
                }else if($(this).val()==4){
                    if(cameras[3]!=""){
                        scanner.start(cameras[3]);
                    }else{
                        alert('No Back camera found!');
                    }
                }
            });
        }else{
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function(e){
        console.error(e);
        alert(e);
    });
</script>

<h4> Select Camera </h4>
<div class="btn-group btn-group-toggle mb-5" id="btngroup" data-toggle="buttons">
</div> 


<div class="modal fade h-200" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg h-500" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div style="height:500px;">
			<iframe name = "frame" style="width:100%;height:100%;"> </iframe>
			</br>
			</br>
			</br>
		</div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>