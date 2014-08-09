<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "GO";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $year = get_most_recent_year();
   $grandReps = get_reps($year);
?>

<div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>

  <center>
      <div class="freehand-h1"><div class="Yellow">Grand Representatives</div></div>
    <h2>Co-Chairman</h2>

    <div id="go">Briana Collins
                 <i>&amp;</i>
                 Serena Bennett
    </div>
    <h4><a href="http://www.gorainbow.org/findus/jurisdictions.taf" target="_blank"> 
                 Other Grand Jurisdiction Websites</a></h4>
  </center>
  <div id="FullBorderTable">
    <table width="760" border="0">
      <colgroup>
          <col style="width: 350px" >
      </colgroup>
        
      <?php foreach($grandReps as $grandRep){ ?>
        <tr>
          <td >
            <span id="officeRep">
		          <?php echo $grandRep["office"]?>
            </span>
          </td>
          <td> 
            <span id="goRep">
		          <?php echo $grandRep["first_name"] . " "?>
		          <?php if($grandRep["nickname"]) echo '"' . $grandRep["nickname"]  . '" '?>
		          <?php echo substr($grandRep["last_name"],0,1) . "."?>
            </span>
          </td>
        </tr>
      <?php } ?>      
    </table>
    </br>    
  </div>
  <h4>Director of Grand Representative Activities </h4>
  <h3><center>Katy Boyles, PGWA, Grand Executive</center></h3>
</div>

 <?php 
  include( INC . 'footer.php');
 ?>