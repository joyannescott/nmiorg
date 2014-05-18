<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");

      $data = json_decode($_POST['json']);
  
      $db->query("CREATE TABLE IF NOT EXISTS administrators(
            name VARCHAR(50),
            num INT,
            assembly VARCHAR(60),
            location VARCHAR(60),
            email VARCHAR(60))");

      $db->query("TRUNCATE TABLE mother_advisors");

      foreach($data as $row){
        try {
          $results = $db->prepare("INSERT INTO mother_advisors 
              (name,  assembly, num,location, email) VALUES (?,?,?,?,?)");  
                $results->bindParam(1, $row->name, PDO::PARAM_STR);
                $results->bindParam(2, $row->assembly, PDO::PARAM_STR);
                $results->bindParam(3, $row->num, PDO::PARAM_INT);
                $results->bindParam(4, $row->location, PDO::PARAM_STR);
                $results->bindParam(5, $row->email, PDO::PARAM_STR);
                $results->execute();
        } catch(Exception $e) {
              echo "Data could not be updated";
        }
      }
    }
?>
