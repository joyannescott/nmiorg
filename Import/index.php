<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    require_once(TABLE . "entries.php");
   
    // Check to see whether the user is logged in or not 
    if(empty($_SESSION['user']) || !is_administrator($_SESSION['user']['email'])) 
    {  
        $_SESSION['alert_message'] = "Adminitrators, please login to access this page.";
        header("Location: ". BASE_URL . "Login"); 
         
        // This die statement is absolutely critical.   
        die("Redirecting to login"); 
    } 

   $pageType   = "import";
   $bootstrap_inc = "true";
   include( INC . 'header.php');
   include( INC . 'sidebar.php');   

 if($_SERVER["REQUEST_METHOD"] == "POST") {
	$type = $_POST["type"];

	if ($_FILES[csv][size] > 0) { 
		$file = $_FILES[csv][tmp_name]; 
		$handle = fopen($file,"r"); 
		// Get header row
        $header = fgetcsv($handle,1000,",","'");
		
	    if($type == "GWA"){
	    	//echo "GWA";
		  $db->query("CREATE TABLE IF NOT EXISTS gwa(
		              number INTEGER,
					  year INTEGER,
					  first_name VARCHAR(30),
					  middle_name VARCHAR(30),
					  last_name VARCHAR(30),
					  married_name VARCHAR(30),
					  install_year INTEGER,
					  assembly INTEGER,
					  swa BOOLEAN);");
          $db->query("TRUNCATE TABLE gwa");

		  do { 
			if ($data[0]) { 
				//echo "found data " . $data[0] . "last_name " . $data[4] . "\n";
				$db->query("INSERT INTO gwa 
				 (number, year, first_name, middle_name, last_name, married_name, 
				  install_year, assembly, swa) VALUES 
					( 
						'".addslashes($data[0])."', 
						'".addslashes($data[1])."', 
						'".addslashes($data[2])."', 
						'".addslashes($data[3])."', 
						'".addslashes($data[4])."', 
						'".addslashes($data[5])."', 
						'".addslashes($data[6])."', 
						'".addslashes($data[7])."', 
						'".addslashes($data[8])."' 
						) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",","'")); 
		}
	    if($type == "Term"){
		  $db->query("CREATE TABLE IF NOT EXISTS term(
					  year INTEGER,
					  description VARCHAR(75),
					  details TEXT);");
          $db->query("TRUNCATE TABLE term");

		  do { 
			if ($data[0]) { 
				//echo "term year " . $data[0];
				$db->query("INSERT INTO term 
			 (year, description, details) VALUES 
					( 
						'".addslashes($data[0])."', 
				   		'".addslashes($data[1])."', 
						'".addslashes($data[2])."' 
					) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",")); 
		}
		if($type == "Girls"){
		  $db->query("CREATE TABLE IF NOT EXISTS girls(
					  number INTEGER,
					  first_name VARCHAR(30),
					  last_name VARCHAR(30),
					  nickname VARCHAR(30),
					  assembly INTEGER,
					  title VARCHAR(30));");
          $db->query("TRUNCATE TABLE girls");

		  do { 
			if ($data[0]) { 
				$db->query("INSERT INTO girls 
			 (number, first_name, last_name, nickname, assembly, title) VALUES 
					( 
						'".addslashes($data[0])."', 
						'".addslashes($data[1])."', 
						'".addslashes($data[2])."', 
						'".addslashes($data[3])."', 
				   		'".addslashes($data[4])."', 
						'".addslashes($data[5])."' 
					) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",")); 
		}
	    if($type == "GrandOfficers"){
		  $db->query("CREATE TABLE IF NOT EXISTS floor(
					  year INTEGER,
					  rank INTEGER,
					  office VARCHAR(50),
					  girl INTEGER,
					  protem INTEGER);");
          $db->query("TRUNCATE TABLE floor");

		  do { 
			if ($data[0]) { 
				$db->query("INSERT INTO floor 
			        (year, rank, office, girl,protem) VALUES 
					( 
						'".addslashes($data[0])."', 
						'".addslashes($data[1])."', 
				   		'".addslashes($data[2])."', 
						'".addslashes($data[3])."', 
						'".addslashes($data[4])."' 
					) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",")); 
		}
	    if($type == "GrandReps"){
		  $db->query("CREATE TABLE IF NOT EXISTS reps(
					  year INTEGER,
					  office VARCHAR(50),
					  girl INTEGER);");
          $db->query("TRUNCATE TABLE reps");

		  do { 
			if ($data[0]) { 
				$db->query("INSERT INTO reps 
			        (year, office, girl) VALUES 
					( 
						'".addslashes($data[0])."', 
				   		'".addslashes($data[1])."', 
						'".addslashes($data[2])."' 
					) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",")); 
		}
		
	    if($type == "GCCT"){
		  $db->query("CREATE TABLE IF NOT EXISTS gcct(
					  year INTEGER,
					  girl INTEGER,
					  title VARCHAR(50));");
          $db->query("TRUNCATE TABLE gcct");

		  do { 
			if ($data[0]) { 
				$db->query("INSERT INTO gcct 
			        (year, girl, title) VALUES 
					( 
						'".addslashes($data[0])."', 
				   		'".addslashes($data[1])."', 
						'".addslashes($data[2])."' 
					) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",")); 
		}
		if($type == "JE"){
      $db->query("CREATE TABLE IF NOT EXISTS je(
            year INTEGER,
            girl INTEGER,
            title VARCHAR(50));");
          $db->query("TRUNCATE TABLE je");

      do {
      if ($data[0]) {
        $db->query("INSERT INTO je
              (year, girl, title) VALUES
          (
            '".addslashes($data[0])."',
            '".addslashes($data[1])."',
            '".addslashes($data[2])."'
          )
        ");
      }
      } while ($data = fgetcsv($handle,1000,","));
    }
		
	    if($type == "Pages"){
		  $db->query("CREATE TABLE IF NOT EXISTS pages(
					  year INTEGER,
					  girl INTEGER,
					  title VARCHAR(50));");
          $db->query("TRUNCATE TABLE pages");

		  do { 
			if ($data[0]) { 
				$db->query("INSERT INTO pages 
			        (year, girl, title) VALUES 
					( 
						'".addslashes($data[0])."', 
				   		'".addslashes($data[1])."', 
						'".addslashes($data[2])."' 
					) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",")); 
		}
	    if($type == "Assemblies"){
		  $db->query("CREATE TABLE IF NOT EXISTS assemblies(
					  num INTEGER,
					  name VARCHAR(50),
					  location VARCHAR(50),
					  ma VARCHAR(50),
					  email VARCHAR(50),
					  active INTEGER);");
          $db->query("TRUNCATE TABLE assemblies");

		  do { 
			if ($data[0]) { 
				$db->query("INSERT INTO assemblies 
			        (num, name, location, ma, email, active) VALUES 
					( 
						'".addslashes($data[0])."', 
						'".addslashes($data[1])."', 
				   	'".addslashes($data[2])."',
						'".addslashes($data[3])."', 
						'".addslashes($data[4])."', 
						'".addslashes($data[5])."' 
					) 
				"); 
			} 
		  } while ($data = fgetcsv($handle,1000,",")); 
		}
		if($type == "GEC"){
      //echo "Grand Executive Committee";
      $db->query("CREATE TABLE IF NOT EXISTS gec(
                  number INTEGER,
                  name VARCHAR(60),
                  title VARCHAR(60));");
      $db->query("TRUNCATE TABLE gec");

      do {
        if ($data[0]) {
          //echo "found data " . $data[0] . "name " . $data[1] . "\n";
          $db->query("INSERT INTO gec
           (number, name, title) VALUES
            (
              '".addslashes($data[0])."',
              '".addslashes($data[1])."',
              '".addslashes($data[2])."'
              )
          ");
        }
      } while ($data = fgetcsv($handle,1000,",","'"));
    }
    if($type == "GD"){
      //echo "Grand Dupties";
      $db->query("CREATE TABLE IF NOT EXISTS gd(
                  number INTEGER,
                  name VARCHAR(60),
                  title VARCHAR(60));");
      $db->query("TRUNCATE TABLE gd");

      do {
        if ($data[0]) {
          echo "found data " . $data[0] . "name " . $data[1] . "\n";
          $db->query("INSERT INTO gd
           (number, name, title) VALUES
            (
              '".addslashes($data[0])."',
              '".addslashes($data[1])."',
              '".addslashes($data[2])."'
              )
          ");
        }
      } while ($data = fgetcsv($handle,1000,",","'"));
    }
    if($type == "Foundation"){
      //echo "Foundation Board";
      $db->query("CREATE TABLE IF NOT EXISTS foundation(
                  number INTEGER,
                  name VARCHAR(60),
                  title VARCHAR(60));");
      $db->query("TRUNCATE TABLE foundation");

      do {
        if ($data[0]) {
          //echo "found data " . $data[0] . "name " . $data[1] . "\n";
          $db->query("INSERT INTO foundation
           (number, name, title) VALUES
            (
              '".addslashes($data[0])."',
              '".addslashes($data[1])."',
              '".addslashes($data[2])."'
              )
          ");
        }
      } while ($data = fgetcsv($handle,1000,",","'"));
    }
    if($type == "Schedule"){
      //echo "Schedule";
      $db->query("CREATE TABLE IF NOT EXISTS schedule(
                  year INTEGER,
                  date VARCHAR(30),
                  description VARCHAR(30));");
      $db->query("TRUNCATE TABLE schedule");

      do {
        if ($data[0]) {
          //echo "found data " . $data[1] . "description " . $data[2] . "\n";
          $db->query("INSERT INTO schedule
           (year, date, description) VALUES
            (
              '".addslashes($data[0])."',
              '".addslashes($data[1])."',
              '".addslashes($data[2])."'
              )
          ");
        }
      } while ($data = fgetcsv($handle,1000,",","'"));
    }
    if($type == "Dates"){
          //echo "Dates";
          $db->query("DROP TABLE dates");
          $db->query("CREATE TABLE IF NOT EXISTS dates(
                      begin INTEGER,
                      end INTEGER,
                      date VARCHAR(30),
                      dateRange VARCHAR(30),
                      time VARCHAR(30),
                      place VARCHAR(60),
                      city VARCHAR(30),
                      state VARCHAR(30));");
          $db->query("TRUNCATE TABLE dates");

          do {
            if ($data[0]) {
              //echo "found data " . $data[1] . "date " . $data[2] . "\n";
              $db->query("INSERT INTO dates
               (begin, end, date, dateRange, time, place, city, state) VALUES
                (
                  '".addslashes($data[0])."',
                  '".addslashes($data[1])."',
                  '".addslashes($data[2])."',
                  '".addslashes($data[3])."',
                  '".addslashes($data[4])."',
                  '".addslashes($data[5])."',
                  '".addslashes($data[6])."',
                  '".addslashes($data[7])."'
                  )
              ");
            }
          } while ($data = fgetcsv($handle,1000,",","'"));
        }

		$success=TRUE; 	
	} 
}
?> 
  <div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
  <h4> Choose your import type: </h4>
  <center>
	  <select id="type" name="type" requried>
	    <option value = "None" disabled selected> Select</option>
	    <option value = "GWA"> GWA</option>
	    <option value = "Term"> GWA Term</option>
	    <option value = "Girls"> Girls</option>
	    <option value = "GrandOfficers"> Grand Floor Officers</option>
	    <option value = "GrandReps"> Grand Representatives</option>
	    <option value = "GCCT"> Grand Cross Of Color Team</option>
	    <option value = "JE"> Junior Executives</option>
	    <option value = "Pages"> Pages</option>
	    <option value = "Assemblies"> Assemblies</option>
	    <option value = "GEC"> Executive Committee</option>
	    <option value = "GD"> Grand Deputies</option>
	    <option value = "Foundation"> Foundation Board</option>
	    <option value = "Schedule"> Schedule</option>
	    <option value = "Dates"> Dates</option>
	  </select> 
  </center>

  <h4>Choose your file: </h4>
  <center>
  	<input type="file" class="hidden" id="uploadFile" name="csv" onchange="pressed()"/><label id="fileLabel">File:</label>
  </center>
   <div class="button" id="uploadTrigger">Upload File</div>

        <p>
            <input type="submit" value="Submit" id="submit">
        </p>

</form> 

<?php if ($success) { echo "<h3><b>Your " . $type .  " file has been imported.</b></h3><br><br>"; } ?> 

</div>
 <?php 
  include( INC . 'footer.php');
 ?>
 