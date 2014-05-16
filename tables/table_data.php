<?php 
   require("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      require("database.php");
      $data = json_decode($_POST['json']);
  
      $db->query("TRUNCATE TABLE t1");

      foreach($data as $i => $row){
          $db->query("INSERT INTO t1 
              (col1, col2, col3) VALUES (
              " . $i  . ",
                '" . $row->name  . "',
                '" . $row->value . "' 
              )");  
      }
    }
?>
