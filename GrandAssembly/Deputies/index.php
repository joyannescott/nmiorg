<?php
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "GA";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $gd = get_gd();
  ?>

  <div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>
    <div class="freehand-h1">
      <div class="Red">Grand Deputies</div>
    </div>
    <center>
      <?php foreach($gd as $d){ ?>
        <div>
          <span id="office">
            <?php echo $d["name"]; ?>
          </span>
          <span id="go">
            <?php if ($d["title"]) echo " ~ " . $d["title"]?>
          </span>
        </div>
      <?php } ?>
    </center>
  <!-- end #mainContent --></div>
  <?php include( INC . 'footer.php');?>
