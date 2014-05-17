<?php
require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");

function get_mother_advisors_all() {
    $entries = array();
    require( INC . "database.php");
    try {
        $results = $db->query("SELECT name, assembly, email FROM mother_advisors");
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
function is_mother_advisor($email_id) {
    require( INC . "database.php");

    $email_lower = strtolower($email_id);
    try {
        $results = $db->prepare("SELECT email, assembly FROM mother_advisors WHERE LOWER(email)=?");   
        $results->bindParam(1, $email_lower, PDO::PARAM_STR);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entry = $results->fetch(PDO::FETCH_ASSOC);
    if($entry["email"] == "") {
      $exists = 0;
    }else{
      $exists = $entry["assembly"];
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
            age,
            initiated,
            office,
            go,
            master,
            supreme,
            grand,
            floor,
            bow,
            begining,
            day,
            time
            FROM ritual");
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
        echo "by assembly " . $assembly;
        $results = $db->prepare("SELECT    
            assembly,         
            name,
            age,
            initiated,
            office,
            go,
            master,
            supreme,
            grand,
            floor,
            bow,
            begining,
            day,
            time
            FROM ritual WHERE assembly=?");
        $results->bindParam(1, $assembly, PDO::PARAM_INT);
        $results->execute();
        echo "finished query ";
    } catch(Exception $e) {
        echo "Data could not be retrieved";
    }
    $entries = $results->fetchAll(PDO::FETCH_ASSOC);
    return $entries;
}