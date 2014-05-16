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
          $db->query("INSERT INTO administrators 
              (name, email) VALUES (
                '" . $row->name  . "',
                '" . $row->email . "' 
              )");  
      }
    }
?>
