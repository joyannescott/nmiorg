<?php
function get_gwa_term_info($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT * FROM term WHERE year=?");
		$results->bindParam(1, $year, PDO::PARAM_INT);
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$term_details = $results->fetchAll(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($term_details);
	return $term_details;
 
}

function get_gwa_info($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT * FROM gwa WHERE year=?");
		$results->bindParam(1, $year, PDO::PARAM_INT);
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$gwa = $results->fetch(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($gwa);
	return $gwa;
 
}
function get_gwa_info_range($start, $end){
	$offset = $end - 1;
	$rows = $start - $offset;
    require("database.php");
  	try{
		$results = $db->prepare("SELECT * FROM gwa WHERE year >= ? AND year <= ?");
		$results->bindParam(1, $start, PDO::PARAM_INT);
		$results->bindParam(2, $end,   PDO::PARAM_INT);
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$gwa = $results->fetchAll(PDO::FETCH_ASSOC);
	
	return $gwa;
 
}
function does_term_info_exist($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT description FROM term WHERE year=?");
		$results->bindParam(1, $year, PDO::PARAM_INT);
		$results->execute();
	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}

	$gwaTerm = $results->fetch(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($gwaTerm["description"] );	
	if($gwaTerm["description"] == "") {
		//echo "term doesn't exists";
	  $gwaTerm = false;
	}else{
			//	echo "term exists";
	  $gwaTerm = true;
    }
	return $gwaTerm;
 
}
function get_floor_officers($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT first_name, last_name, nickname, assembly, office 
		                         FROM floor JOIN girls ON floor.girl = girls.number 
								 WHERE year=?");
		$results->bindParam(1, $year, PDO::PARAM_INT);
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$floor = $results->fetchAll(PDO::FETCH_ASSOC);
	$floor = array_reverse($floor);
	//echo "<pre>";
	//var_dump($floor);
	return $floor;
 
}

function get_reps($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT first_name, last_name, nickname, assembly, office 
		                         FROM reps JOIN girls ON reps.girl = girls.number 
								 WHERE year=?");
		$results->bindParam(1, $year, PDO::PARAM_INT);
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$reps = $results->fetchAll(PDO::FETCH_ASSOC);
	//$reps = array_reverse($reps);
	//echo "<pre>";
	//var_dump($term_details);
	return $reps;
 
}
function get_gcct($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT first_name, last_name, nickname, assembly, gcct.title 
		                         FROM gcct JOIN girls ON gcct.girl = girls.number 
								 WHERE year=?");
		$results->bindParam(1, $year, PDO::PARAM_INT);
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$gcct = $results->fetchAll(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($gcct);
	return $gcct;
 
}
function get_pages($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT first_name, last_name, nickname, assembly, pages.title 
		                         FROM pages JOIN girls ON pages.girl = girls.number 
								 WHERE year=?");
		$results->bindParam(1, $year, PDO::PARAM_INT);
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$pages = $results->fetchAll(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($pages);
	return $pages;
 
}


function get_most_recent_year(){
	 require(INC . "database.php");
  	try{
		$results = $db->prepare("SELECT year FROM term ORDER BY year DESC");
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	$year = $results->fetch(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($year);
	return $year["year"];
}

?>