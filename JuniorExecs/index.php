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
  <div id="go">Serina P.</div>
  <div id="go">Ariana C.</div>
  <div id="go">Corrine W.</div>
  <div id="go">Lauren D.</div>
  <div id="go">Norann C.</div>
  <div id="go">Alexa T. </div>
  <div id="go">Kimberly B.</div>
  <div id="go">Sara K.</div>
  <div id="go">Missy W.</div>
  <div id="go">Autumn H.</div>
  <div id="go">Carley C. </div>
  <div id="go">Lacey O.</div>
  <div id="go">Morgan  M.</div>
  <div id="go">Cricket B.</div>
  </center>
  </div>
<?php 
  include( INC . 'footer.php');
 ?>