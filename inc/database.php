<?php
    require("defines.php");
 	try{
		if(defined(PORT)){	
	      $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME. ";port=" . PORT, UNAME, PASS);
		} else {
		  $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, UNAME, PASS);
		}
		/*$db = new 
		  PDO("mysql:host=mysql.thescotts.co;dbname=nm_grandassembly_db",
		  "nmiorg","Colors4Girls");*/
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'UTF8'");
	} catch (Execption $e) {
			echo "Could not connect to the database.";
			exit;
	}
