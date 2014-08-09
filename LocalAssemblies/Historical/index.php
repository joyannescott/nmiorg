<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require_once( INC . "database.php");
   require_once( INC . 'Info.php');
   
   $assemblies = get_all_assemblies();

   $pageType = "Assemblies";
   $bootstrap_inc = "true";
   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
      <div class="freehand-h1"><div class="Indigo">New Mexico Historical Assemblies</div></div>
    <div id="FullBorderTable">
    <table >
      <tr>
        <td height="54"><u><font size="+1"> <em>Assembly</em></font></u></td>
        <td><u><font size="+1"><em>Location</em></font></u></td>
     </tr>
     <?php foreach($assemblies as $assembly){ ?>
      <tr>
        <td width="193" height="55"><?php echo $assembly["name"] . " #" . $assembly["num"];?> </td>
        <td width="187"><?php echo $assembly["location"];?></td>
      </tr>
     <?php } ?>
    </table>
    </div>
    <!-- end #mainContent -->
    </div>
  <?php 
  include( INC . 'footer.php');
 ?>
