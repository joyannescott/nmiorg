<?php 
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    require_once(INC . 'Info.php');
    $pageType   = "GWA";
   if(isset($_GET["y"])){
     $year = intval($_GET["y"]);
   }
   if(empty($year)){
	   header("Location: " . BASE_URL . "index.php");
   }
   $pageSubType = floor($year/10) * 10;
   $gwa = get_gwa_info($year);
   $details = get_gwa_term_info($year);
   $grandOfficers = get_floor_officers($year);
   $grandReps = get_reps($year);
   $gcct = get_gcct($year);
   $pages = get_pages($year);
   
   if(get_most_recent_year() != $year && (count($grandReps) !=0)) { 
      $pageHeight = "GWAFullHeight";
   } else {
      $pageHeight = "GWAHeight";
   }
   
   include(INC . 'header.php');
   include(INC . 'sidebar.php');   
   $gwa_graphic = "/images/GWA Graphic/" . 
		            $gwa["number"]     . " " . 
	   				    $gwa["first_name"] . " " . 
					      $gwa["last_name"]  . " term.gif";

  if(!file_exists(ROOT . $gwa_graphic)) {
	   $gwa_graphic = "";
   }
   $gwa_pic = BASE_URL . "images/GWA Photos/" . 
		            $gwa["number"]     . " " . 
					      $gwa["first_name"] . " ";
    if($gwa["middle_name"]) $gwa_pic .= $gwa["middle_name"] . " ";
					      $gwa_pic .= $gwa["last_name"];
 									
   if(file_exists(ROOT . $gwa_pic . " Color.jpg")) {
	   $gwa_pic = $gwa_pic . " Color.jpg";
   } else {
	   $gwa_pic = $gwa_pic . ".jpg";
   }	
  ?>	

  <div id="mainContent">
    <?php if($gwa_graphic != "") { ?>
      <div id="GWAImg">
        <img src="<?php echo $gwa_graphic; ?>"
           alt="Grand Worthy Advisor" boarder="3px" boarder-color:"0x990000"/>
     </div> 
   <?php } ?>
 		  <div id="GWAHeadText">
            <span id="GWAHeadPic">     
            <div id="GWAText" ><img src="<?php echo $gwa_pic; ?>"
                         width="150" boarder-radius="100" 
                         alt="<?php echo $gwa["first_name"];?>"/> <br/>
            </div>			
          </span>          </div>
 		  <div id="GWAHeadText">

                    <div id=GWAText><img src="<?php echo BASE_URL;?>images/GWA.gif"/></div>
          <h1 align="center" style="padding-bottom:-100px"><?php 
						echo     $gwa["first_name"] . " " . 
								 $gwa["last_name"] ?>
          </h1> 
          <div id=GWAText align="center" style="padding-top:-100px"><?php 
						echo     $gwa["install_year"] . " &ndash; " . 
								 $gwa["year"] ?>
          </div>
          </div>
    
    <div id="FullBorderTable">

      <table >  
        <colgroup>
          <col style="width: 200px" >
        </colgroup>
        <tr>
        <th colspan="2">Term Details</th> 
        </tr>
        <?php foreach($details as $detail){ ?>
          <tr>
            <td >
              <span class="colOneTerm">
		        <?php echo $detail["description"]?>
              </span>
            </td>
            <td> 
		        <?php echo $detail["details"]?>
            </td>
          </tr>
        <?php } ?>
      </table><br />
      <?php if(get_most_recent_year() != $year) { ?>
         &nbsp;
         
        <?php  if(count($grandOfficers) != 0) { ?>
        <table>  
          <colgroup>
            <col style="width: 300px" >
          </colgroup>
          <tr>
          <th colspan="2">Grand Officers</th> 
          </tr>
          <?php foreach($grandOfficers as $grandOfficer){ ?>
            <tr>
              <td >
                <span class="colOne">
  		        <?php echo $grandOfficer["office"]?>
                </span>
              </td>
              <td> 
  		        <?php echo $grandOfficer["first_name"] . " "?>
  		        <?php if($grandOfficer["nickname"]) echo '"' . $grandOfficer["nickname"]  . '" '?>
  		        <?php echo substr($grandOfficer["last_name"],0,1) . "."?>
              </td>
            </tr>
          <?php } ?>
        </table>
       <?php } ?>

        <?php if(count($grandReps) != 0) { ?>
        </table><br /> &nbsp;
        <table>  
          <colgroup>
            <col style="width: 300px" >
          </colgroup>
          <tr>
          <th colspan="2">Grand Representatives</th> 
          </tr>
          <?php foreach($grandReps as $grandRep){ ?>
            <tr>
              <td >
                <span class="colOne">
  		        <?php echo $grandRep["office"]?>
                </span>
              </td>
              <td> 
  		        <?php echo $grandRep["first_name"] . " "?>
  		        <?php if($grandRep["nickname"]) echo '"' . $grandRep["nickname"]  . '" '?>
  		        <?php echo substr($grandRep["last_name"],0,1) . "."?>
              </td>
            </tr>
          <?php } ?>
        </table>
        <?php } ?>
        
        <?php if(count($gcct) != 0) { ?>
        </table><br /> &nbsp;
        <table>  
          <colgroup>
            <col style="width: 300px" >
          </colgroup>
          <tr>
          <th colspan="2">Grand Cross of Color Team</th> 
          </tr>
          <?php foreach($gcct as $i => $member){ ?>
            <?php if(floor($i/2) == ceil($i/2)) { echo "<tr>"; } ?>
              <td >
  		        <?php echo $member["first_name"] . " "?>
  		        <?php if($member["nickname"]) echo '"' . $member["nickname"]  . '" '?>
  		        <?php echo substr($member["last_name"],0,1) . "."?>

              </td>
            <?php if(floor($i/2) == ceil($i/2)) { echo "</tr>"; } ?>
          <?php } ?>
        </table>
        <?php } ?>
        
        <?php if(count($pages) != 0) { ?>
        </table><br /> &nbsp;
        <table>  
          <colgroup>
            <col style="width: 300px" >
          </colgroup>
          <tr>
          <th colspan="2">Grand Cross of Color Team</th> 
          </tr>
          <?php foreach($pages as $i => $member){ ?>
            <?php if(floor($i/2) == ceil($i/2)) { echo "<tr>"; } ?>
              <td >
  		        <?php echo $member["first_name"] . " "?>
  		        <?php if($member["nickname"]) echo '"' . $member["nickname"]  . '" '?>
  		        <?php echo substr($member["last_name"],0,1) . "."?>

              </td>
            <?php if(floor($i/2) == ceil($i/2)) { echo "</tr>"; } ?>
          <?php } ?>
        </table>
        <?php } ?>

      <?php } ?>
     </div>
  </div>

 <?php 
  include( INC . 'footer.php');
 ?>
 