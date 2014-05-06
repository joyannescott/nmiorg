<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   $pageHeight = "GORepsHeight";
   $pageType   = "GO";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $year = get_most_recent_year();
   $grandReps = get_reps($year);
?>

<div id="mainContent">

  <center>
    <h1><img src="<?php echo BASE_URL;?>images/GRep.gif" 
             alt="Grand Officers" width="400" height="110" /></h1>
    <h2>Co-Chairman</h2>

    <div id="go">Harley Rogers 
                 <i>&amp;</i>
                 Krystie Rae Arambula
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
  <h3><center>Katy Boyles, PGWA, Grand Deputy</center></h3>
</div>

 <?php 
  include( INC . 'footer.php');
 ?>