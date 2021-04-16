<?php
			try{
				$host 		= 	'lochnagar.abertay.ac.uk';
				$dbname 	= 	'sqlcmp311gc1902';
				$username 	= 	'sqlcmp311gc1902';
				$password 	= 	'mBXDAaXx5BgC';

				$con = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$username,$password);
				
				
			} catch (PDOException $e) {
				
				die($e);
			}
?>