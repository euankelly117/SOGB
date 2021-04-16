<?php

include_once "../Model/api.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>YEET - QR Code Scanner Prototype</title>

</head>
<body>

<?php
if(!isset($_COOKIE["so_user"])) {
    echo "Cookie named '" . "so_user" . "' is not set!";
} else {
    echo "Cookie '" . "so_user" . "' is set!<br>";
    echo "Value is: " . $_COOKIE["so_user"];
	echo "<img src=\"https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$_COOKIE["so_user"]."&choe=UTF-8\" title=\"Link to Google.com\" />";
}
?>
  
</body>
</html>