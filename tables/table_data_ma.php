<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");

      $data = json_decode($_POST['json']);
  
      $db->query("CREATE TABLE IF NOT EXISTS administrators(
            name VARCHAR(50),
            assembly INT,
            email VARCHAR(60))");

      $db->query("TRUNCATE TABLE mother_advisors");

      foreach($data as $row){
          $db->query("INSERT INTO mother_advisors 
              (name, assembly, email) VALUES (
                '" . $row->name  . "',
                '" . $row->assembly  . "',
                '" . $row->email . "' 
              )");  
      }
    }
?>
