 <?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");
   require(TABLE . "entries.php");
   
    // Check to see whether the user is logged in or not 
    if(empty($_SESSION['user']) || !is_administrator($_SESSION['user']['email'])) 
    {  
        $_SESSION['alert_message'] = "Adminitrators, please login to access this page.";
        header("Location: ". BASE_URL . "login/login.php"); 
         
        // This die statement is absolutely critical.   
        die("Redirecting to login"); 
    } 

   $pageType   = "import";
   $bootstrap_inc = "true";
   include( INC . 'header.php');
   include( INC . 'sidebar.php');   

 if($_SERVER["REQUEST_METHOD"] == "POST") {

    require( INC . "database.php");
	
	$type = $_POST["type"];

	if ($_FILES[csv][size] > 0) { 
		$file = $_FILES[csv][tmp_name]; 
		$handle = fopen($file,"r"); 
		// Get header row
        $header = fgetcsv($handle,1000,",","'");
		
	    if($type == "GWA"){
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
					  office VARCHAR(50),
					  girl INTEGER);");
          $db->query("TRUNCATE TABLE floor");

		  do { 
			if ($data[0]) { 
				$db->query("INSERT INTO floor 
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
	    <option value = "Pages"> Pages</option>
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
 