<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "GO";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $year = get_most_recent_year();
   $grandOfficers = get_floor_officers($year);
  ?>
  
  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
  	<h1><img src="<?php echo BASE_URL;?>images/GrandOfficers.gif" 
      alt="Grand Officers" width="302" height="104" /></h1>
      <center>
            <?php foreach($grandOfficers as $grandOfficer){ ?>
  
                <span id="office">
		        <?php echo $grandOfficer["office"] . " ~ "?>
                </span>
             	<span id="go">
		        <?php echo $grandOfficer["first_name"] . " "?>
		        <?php if($grandOfficer["nickname"]) echo '"' . $grandOfficer["nickname"]  . '" '?>
		        <?php echo substr($grandOfficer["last_name"],0,1) . ".<br>" ?>
         		        <?php } ?>
				</span>
    </center>
    
       <!-- end #mainContent --></div> 
    
    
    
    
    
 <!--   Grand Worthy Advisor -	Serina <br>
    Grand Worthy Associate Advisor   - Norann <br>
    Grand Charity				- Alexa <br>
    Grand Hope				- Sara <br>
    Grand Faith			- Shannon<br>
    Grand Lecturer				- Kimberly <br>
    Grand Recorder	-	Ivory <br>
    Grand Treasurer			- Da'Shona <br>
    Grand Chaplain				- Dynesha<br>
    Grand Drill Leader			- Jessica <br>
    Grand Love				- Ashley <br>
    Grand Religion				- Autumn <br>
    Grand Nature				- Christina <br>
    Grand Immortality			- Jessica <br>
    Grand Fidelity				- Carley<br>
    Grand Patriotism			- Harley <br>
    Grand Service				- Erica <br>
    Grand Confidential - Krystie Rae <br>
    Grand Outer Observer		- Britney <br>
    Grand Musician - Ariana </div>-->


<?php 
  include( INC . 'footer.php');
 ?>
