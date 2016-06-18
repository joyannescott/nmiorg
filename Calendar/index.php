<?php
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "Home";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once( INC . 'Info.php');
   $schedule = get_schedule();
  ?>

  <div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>
    <div class="freehand-h1">
      <div class="Red">Calendar</div>
    </div>
    <div id="FullBorderTable">
     	<table>
        <?php foreach($schedule as $event){ ?>
          <tr>
            <td><?php echo $event["date"] . ', ' . $event["year"]?></td>
            <td><?php echo $event["description"]?></td>
          </tr>
        <?php } ?>
  	  </table>
  	</div>
  <!-- end #mainContent --></div>
  <?php include( INC . 'footer.php');?>
