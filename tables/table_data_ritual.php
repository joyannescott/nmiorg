<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    require_once(TABLE . "entries.php");

    // Check to see whether the user is logged in or not 
    if(empty($_SESSION['user']) || !(is_administrator( $_SESSION['user']['email'])  || 
                                     is_mother_advisor($_SESSION['user']['email'])))
   {  
        $_SESSION['alert_message'] = "Mother Advisors, please login to access this page.";
        header("Location: " . BASE_URL . "Login"); 
         
        // This die statement is absolutely critical.   
        die("Redirecting to Login"); 
    } 

      $data = json_decode($_POST['json']);

      $db->query("CREATE TABLE IF NOT EXISTS ritual(
            name VARCHAR(50),
            assembly INT,
            initiated DATE,
            office VARCHAR(50),
            go VARCHAR(60),
            master VARCHAR(10),
            category VARCHAR(20),
            bow VARCHAR(20),
            day VARCHAR(20),
            time VARCHAR(10))");

      $db->query("TRUNCATE TABLE ritual");

      foreach($data as $row){
        try {
            $results = $db->prepare("INSERT INTO ritual 
              ( name,
                assembly,
                initiated,
                office,
                go,
                master,
                category,
                bow,
                day,
                time
                 ) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $results->bindParam(1,  $row->name , PDO::PARAM_STR);
            $results->bindParam(2,  intval($row->assembly) , PDO::PARAM_INT);
            $results->bindParam(3,  $row->initiated , PDO::PARAM_STR);
            $results->bindParam(4,  $row->office , PDO::PARAM_STR);
            $results->bindParam(5,  $row->go , PDO::PARAM_STR);
            $results->bindParam(6,  intval($row->master) , PDO::PARAM_INT);
            $results->bindParam(7, $row->category , PDO::PARAM_STR);
            $results->bindParam(8, $row->bow  , PDO::PARAM_STR);
            $results->bindParam(9, $row->day , PDO::PARAM_STR);
            $results->bindParam(10, $row->time , PDO::PARAM_STR);
            $results->execute();
        } catch(Exception $e) {
              echo "Data could not be updated";
        }
      }
    }

