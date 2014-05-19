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

      $db->query("CREATE TABLE IF NOT EXISTS assembly_girls(
            name VARCHAR(50),
            assembly INT,
            email VARCHAR(60))");

      $db->query("TRUNCATE TABLE assembly_girls");

      foreach($data as $row){
        try {
          $results = $db->prepare("INSERT INTO assembly_girls 
                (name, assembly, email) VALUES (?,?,?)");  
                $results->bindParam(1, $row->name, PDO::PARAM_STR);
                $results->bindParam(2, intval($row->assembly), PDO::PARAM_INT);
                $results->bindParam(3, $row->email, PDO::PARAM_STR);
                $results->execute();
        } catch(Exception $e) {
              echo "Data could not be updated";
        }
      }
    }

