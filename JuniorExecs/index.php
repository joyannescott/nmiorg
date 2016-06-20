<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require_once( INC . "database.php");

   $pageType   = "GO";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $je = get_junior_execs(get_ending_year());
  ?>

  <div id="mainContent" >
  <?php include(LOGIN . "login_header.php"); ?>
  <center>
    <div class="freehand-h1"><div class="Yellow">Junior Executives</div></div>
      <?php foreach($je as $exec){ ?>
        <div>
          <span id="office">
          <?php echo $exec["first_name"] . " "?>
          <?php if($exec["nickname"]) echo '"' . $exec["nickname"]  . '" '?>
          <?php echo substr($exec["last_name"],0,1) . "." ?>
          </span>
          <span id="go">
            <?php if ($exec["title"]) echo " ~ " . $exec["title"]?>
          </span>
        </div>
      <?php } ?>
    <br>
    <h4>Director of the Junior Executives ~ Amber Deveraux, PGWA, Grand Deputy</h4>
  </center>
</div>
<?php include( INC . 'footer.php');?>

