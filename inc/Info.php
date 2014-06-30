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
function get_assemblies(){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT * FROM assemblies
			                     ORDER BY active DESC, num ASC");
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$assemblies = $results->fetchAll(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($gwa);
	return $assemblies;
 
}

function get_latest_year(){
	return 2015;
}

function get_gwa_info_range($start, $end){
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
		$results = $db->prepare("SELECT year, first_name, last_name, nickname, assembly, office, rank
		                         FROM floor JOIN girls ON  girls.number = floor.girl
								 WHERE year=? ORDER BY rank DESC");
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
function get_floor_officers_search($year, $office, $assembly, $first, $last, $start, $end){

 $select_string = "SELECT year, first_name, last_name, nickname, assembly, office, rank, name ";
 $join_string = "FROM floor JOIN girls ON  girls.number = floor.girl
		         JOIN assemblies ON girls.assembly = assemblies.num ";
 $where_string = "";
 $order_string = "ORDER BY year DESC, rank ASC ";
 $limit_string = "";

 if($year){
 	if($where_string == "") $where_string .= " WHERE ";
 	else                    $where_string .= " AND ";
 	
 	$where_string .= " year = :year ";
    $query_params[':year'] = $year;
 }
 if($office){
  	if($where_string == "") $where_string .= " WHERE ";
 	else                    $where_string .= " AND ";

	$where_string .= " office LIKE :office ";
    //$query_params = array( 
    //                ':office' => $office
    //            ); 
    $query_params[':office'] = $office;
 }
 if($assembly){
 	if($where_string == "") $where_string .= " WHERE ";
 	else                    $where_string .= " AND ";

	$where_string .= " assembly = :assembly ";
	$query_params[':assembly'] = $assembly;
 }

 if($first){
 	if($where_string == "") $where_string .= " WHERE ";
 	else                    $where_string .= " AND ";

	$where_string .= " ( first_name LIKE :first OR last_name LIKE :first) ";
	$query_params[':first'] = $first . "%" ;
 }
if($last){
 	if($where_string == "") $where_string .= " WHERE ";
 	else                    $where_string .= " AND ";

	$where_string .= " ( last_name LIKE :last) ";
	$query_params[':last'] = $last . "%" ;
 }
if($start > 0){
	$offset = $start - 1;
    $rows = $end - $offset;
    
    $limit_string = "LIMIT " . $offset . " , " . $rows;
}
 $query = $select_string . $join_string . $where_string . $order_string . $limit_string;
 //echo $query;
 //var_dump($query_params);

 require("database.php");
    try{
		  $stmt = $db->prepare($query);
		  	//$stmt->bindParam(:offset, $offset, PDO::PARAM_INT);
        	//$stmt->bindParam(:rows, $rows, PDO::PARAM_INT);
		  $results = $stmt->execute($query_params);

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	$floor = $stmt->fetchAll();
 	//echo "<pre>";
	//var_dump($floor);
	return $floor;
 
}
function get_floor_officers_count($year, $office, $assembly, $first, $last){
   $officers = get_floor_officers_search($year, $office, $assembly, $first, $last, 0,0);
  return count($officers);
}

function get_reps($year){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT first_name, last_name, nickname, assembly, office
		                         FROM reps JOIN girls ON reps.girl = girls.number 
								 WHERE year=? ORDER BY office ASC");
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

function get_all_assemblies(){
 require("database.php");
  	try{
		$results = $db->prepare("SELECT num, name, location
		                         FROM assemblies");
		$results->execute();

	} catch (Execption $e) {
			echo "Could not retrieve data";
			exit;
	}
	
	$assemblies = $results->fetchAll(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//var_dump($pages);
	return $assemblies;
 
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

function does_name_contain($girl, $search_term) {

	if($search_term === ""){
		return true;
	}

     $full_name = $girl["first_name"] . " " . $girl["last_name"];
     //$full_nick = $girl["nick_name"] . " " . $girl["last_name"];
     //$total_name = $girl["first_name"] . ' "' .  $girl["nick_name"] . '" ' . $girl["last_name"];

     if(strpos($full_name, $search_term) !== false ){
     	//strpos($full_nick, $search_term)  !== false ||
     	//strpos($total_name, $search_term)  !== false ){
     	return true;
     }
     return false;
}

