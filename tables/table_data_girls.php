<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");

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

