<?php
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "GA";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $gec = get_gec();
  ?>

  <div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>
    <div class="freehand-h1">
      <div class="Red">Grand Executive Committee</div>
    </div>
    <center>
      <?php foreach($gec as $ge){ ?>
        <div>
          <span id="office">
            <?php echo $ge["name"]; ?>
          </span>
          <span id="go">
            <?php if ($ge["title"]) echo " ~ " . $ge["title"]?>
          </span>
        </div>
      <?php } ?>
    </center>
  <!-- end #mainContent --></div>
  <?php include( INC . 'footer.php');?>
