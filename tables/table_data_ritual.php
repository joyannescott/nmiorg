<?php 
    echo "Here we are";
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");

      $data = json_decode($_POST['json']);

      $db->query("CREATE TABLE IF NOT EXISTS ritual(
            name VARCHAR(50),
            age INT,
            assembly INT,
            initiated DATE,
            office VARCHAR(50),
            go VARCHAR(60),
            master VARCHAR(10),
            supreme VARCHAR(10),
            grand VARCHAR(10),
            floor VARCHAR(10),
            bow VARCHAR(20),
            begining VARCHAR(10),
            day VARCHAR(20),
            time VARCHAR(10))");

      $db->query("TRUNCATE TABLE ritual");
      echo("truncated table");
      foreach($data as $row){
          $db->query("INSERT INTO ritual 
              ( name,
                age,
                assembly,
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
                 ) VALUES (
                '" . $row->name  . "',
                '" . intval($row->age)  . "',
                '" . intval($row->assembly)  . "',
                '" . $row->initiated  . "',
                '" . $row->office  . "',
                '" . $row->go  . "',
                '" . $row->master  . "',
                '" . $row->supreme  . "',
                '" . $row->grand  . "',
                '" . $row->floor  . "',
                '" . $row->bow  . "',
                '" . $row->beginning  . "',
                '" . $row->day  . "',
                '" . $row->time . "' 
              )");  
      }
    }
?>
