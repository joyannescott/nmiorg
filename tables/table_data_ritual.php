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
        try {
          $results = $db->prepare("INSERT INTO ritual 
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
                 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $results->bindParam(1,  $row->name , PDO::PARAM_STR);
                $results->bindParam(2,  intval($row->age), PDO::PARAM_INT);
                $results->bindParam(3,  intval($row->assembly) , PDO::PARAM_INT);
                $results->bindParam(4,  $row->initiated , PDO::PARAM_STR);
                $results->bindParam(5,  $row->office , PDO::PARAM_STR);
                $results->bindParam(6,  $row->go , PDO::PARAM_STR);
                $results->bindParam(7,  $row->master , PDO::PARAM_STR);
                $results->bindParam(8,  $row->supreme , PDO::PARAM_STR);
                $results->bindParam(9,  $row->grand , PDO::PARAM_STR);
                $results->bindParam(10, $row->floor , PDO::PARAM_STR);
                $results->bindParam(11, $row->bow  , PDO::PARAM_STR);
                $results->bindParam(12, $row->beginning , PDO::PARAM_STR);
                $results->bindParam(13, $row->day , PDO::PARAM_STR);
                $results->bindParam(14, $row->time , PDO::PARAM_STR);
                $results->execute();
        } catch(Exception $e) {
              echo "Data could not be updated";
        }
      }
    }
?>
