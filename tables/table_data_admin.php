<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");

      $data = json_decode($_POST['json']);

      $db->query("CREATE TABLE IF NOT EXISTS administrators(
            name VARCHAR(50),
            email VARCHAR(60))");

      $db->query("TRUNCATE TABLE administrators");

      foreach($data as $row){
        try {
          $results = $db->prepare("INSERT INTO administrators 
                (name, email) VALUES (?,?)");  
                $results->bindParam(1, $row->name, PDO::PARAM_STR);
                $results->bindParam(2, $row->email, PDO::PARAM_STR);
                $results->execute();
        } catch(Exception $e) {
              echo "Data could not be updated";
        }
      }
    }
?>
