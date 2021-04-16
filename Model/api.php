<?php
	// Connect to database
	include_once "dbconnection.php";

	function getPassword($email) {
		$queryText = "select * from so_user where u_email = '".$email."';";
		global $con;
		$query = $con->query("$queryText");
		$result = $query->fetchALL(PDO::FETCH_ASSOC);
		$password = $result[0]['u_password'];
		return $password;
	}
	
	function getName($email) {
		$queryText = "select * from so_user where u_email = '".$email."';";
		global $con;
		$query = $con->query("$queryText");
		$result = $query->fetchALL(PDO::FETCH_ASSOC);
		$name = $result[0]['u_forename']." ".$result[0]['u_surname'];
		return $name;
	}
	
	function getPage($id){
		$queryText = "select * from so_pages where p_id = '".$id."';";
		global $con;
		$query = $con->query("$queryText");
		$result = $query->fetchALL(PDO::FETCH_ASSOC);
		return $result;
	}
	
	function getAllPages(){
		$queryText = "select * from so_pages;";
		global $con;
		$query = $con->query("$queryText");
		$result = $query->fetchALL(PDO::FETCH_ASSOC);
		return $result;
	}
	
	function getAllArticles(){
		$queryText = "select * from so_articles;";
		global $con;
		$query = $con->query("$queryText");
		$result = $query->fetchALL(PDO::FETCH_ASSOC);
		return $result;
	}
?>