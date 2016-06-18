<?php
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "Foundation";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $foundation = get_foundation();
  ?>

  <div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>
    <div class="freehand-h1">
      <div class="Red">Foundation Board</div>
    </div>
    <center>
      <?php foreach($foundation as $member){ ?>
        <div>
          <span id="office">
            <?php echo $member["name"]; ?>
          </span>
          <span id="go">
            <?php if ($member["title"]) echo " ~ " . $member["title"]?>
          </span>
        </div>
      <?php } ?>
    </center>
  <!-- end #mainContent --></div>
  <?php include( INC . 'footer.php');?>