<?php
require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");

function get_mother_advisors_all() {
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->query("SELECT name, assembly, num, location, email FROM mother_advisors");
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;
}

function get_administrators_all() {
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->query("SELECT name, email FROM administrators");
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;
}

function is_administrator($email_id) {
    require( INC . "database.php");

    $email_lower = strtolower($email_id);
    try {
        $results = $db->prepare("SELECT email FROM administrators WHERE LOWER(email)=?");   
        $results->bindParam(1, $email_lower, PDO::PARAM_STR);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entry = $results->fetch(PDO::FETCH_ASSOC);
    if($entry["email"] == "") {
        //echo "account doesn't exists";
      $exits = false;
    }else{
        //echo "account exists";
      $exists = true;
    }
    return $exists;

}
function is_ga_member($email_id) {
    require( INC . "database.php");

    $email_lower = strtolower($email_id);
    try {
        $results = $db->prepare("SELECT email FROM ga_members WHERE LOWER(email)=?");   
        $results->bindParam(1, $email_lower, PDO::PARAM_STR);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entry = $results->fetch(PDO::FETCH_ASSOC);
    if($entry["email"] == "") {
        //echo "account doesn't exists";
      $exits = false;
    }else{
        //echo "account exists";
      $exists = true;
    }
    return $exists;

}
function is_mother_advisor($email_id) {
    require( INC . "database.php");

    $email_lower = strtolower($email_id);
    try {
        $results = $db->prepare("SELECT email, assembly, num FROM mother_advisors WHERE LOWER(email)=?");   
        $results->bindParam(1, $email_lower, PDO::PARAM_STR);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    if(empty($entries)) {
      $exists = 0;
    }else{
      $exists = $entries;
    }
    return $exists;

}
function get_ritual_registration_all() {
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->query("SELECT      
            assembly,       
            name,
            initiated,
            office,
            go,
            master,
            category,
            bow,
            day,
            time
            FROM ritual ORDER BY assembly ASC");
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;
}
function get_ritual_registration_assembly($assembly) {
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->prepare("SELECT    
            assembly,         
            name,
            initiated,
            office,
            go,
            master,
            category,
            bow,
            day,
            time
            FROM ritual WHERE assembly=?");
        $results->bindParam(1, $assembly, PDO::PARAM_INT);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;
}

function get_girls_all() {
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->query("SELECT      
            assembly,       
            name,
            email
            FROM assembly_girls ORDER BY assembly ASC");
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;
}
function get_girls_assembly($assembly) {
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->prepare("SELECT    
            assembly,       
            name,
            email
            FROM assembly_girls WHERE assembly=?");
        $results->bindParam(1, $assembly, PDO::PARAM_INT);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;
}

function get_assembly_name($num){
    require( INC . "database.php");

    try {
        $results = $db->prepare("SELECT assembly FROM mother_advisors WHERE LOWER(num)=?");   
        $results->bindParam(1, $num, PDO::PARAM_INT);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entry = $results->fetch(PDO::FETCH_ASSOC);
    if(empty($entry)) {
      $exists = "";
    }else{
      $exists = $entry['assembly'];
    }
    return $exists;

}
function is_assembly_member($email_id){
    require( INC . "database.php");

    $email_lower = strtolower($email_id);
    try {
        $results = $db->prepare("SELECT assembly FROM assembly_girls WHERE LOWER(email)=?");   
        $results->bindParam(1, $email_lower, PDO::PARAM_STR);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    if(empty($entries)) {
      $exists = 0;
    }else{
      $exists = $entries;
    }
    return $exists;
}
function get_ga_members_all(){
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->query("SELECT           
            name,
            email
            FROM ga_members ORDER BY name ASC");
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;

}
