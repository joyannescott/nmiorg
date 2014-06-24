<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require_once( INC . "database.php");

   $pageType   = "GO";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent" >
  <?php include(LOGIN . "login_header.php"); ?>
  <center>
  <h1><img src="<?php echo BASE_URL;?>images/GJunior.gif" 
      alt="Grand Officers" width="330" height="104" /></h1>
  <div id="go">Alexa T, GWA </div>
  <div id="go">Serina P, JPGWA</div>
  <div id="go">Ariana C, PGWA</div>
  <div id="go">Corrine W, PGWA</div>
  <div id="go">Lauren D, PGWA</div>
  <div id="go">Carley C, GO </div>
  <div id="go">Jessica C, GO</div>
  <div id="go">Shannon W, GO</div>
  <div id="go">Dynesha D, GO</div>
  <div id="go">Ashley B, GO</div>
  <div id="go">Lacey O, PGO</div>
  <div id="go">Morgan M, PGO, Emeritus</div>
  <br>
  <h4>Director of the Junior Executives ~ Amber Deveraux, PGWA, Grand Deputy</h4>
  </center>
  </div>
<?php 
  include( INC . 'footer.php');
 ?>

