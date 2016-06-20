<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require_once( INC . "database.php");
   require_once(INC . 'Info.php');

   $pageType = "Assemblies";
   $bootstrap_inc = "true";
   $assemblies = get_current_assemblies();
   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
      <div class="freehand-h1"><div class="Indigo">Local Assemblies</div></div>
    <div id="FullBorderTable">
    <table >
      <tr>
        <td height="54"><u><font size="+1"> <em>Assembly</em></font></u></td>
        <td><u><font size="+1"><em>Location</em></font></u></td>
        <td><u><font size="+1"><em>Mother Advisor</em></font></u></td>
      </tr>
      <?php foreach($assemblies as $assembly){ ?>
        <tr>
          <td width="193" height="55"><i><?php echo $assembly["name"] . ' #' . $assembly["num"]?></i><br /></td>
          <td width="187"><?php echo $assembly["location"]?></td>
          <td width="223"><a href='mailto:<?php echo $assembly["email"]?>'><?php echo $assembly["ma"];?></a></td>
        </tr>
      <?php } ?>
     </table>
    </div>

    <p align="center">(To contact the Mother Advisor click on their name)</p>
    <!-- end #mainContent -->
    </div>
  <?php include( INC . 'footer.php');?>
