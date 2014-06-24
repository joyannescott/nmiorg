<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "GA";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
  	<div class="mozilla"></div>
    <h1>Grand Deputies</h1>
  	<center>
    	<div> <span id="go">Mrs. Joy Scott ~</span><span id="office"> PGO</span></div>
    	<div> <span id="go">Miss Keilyn Wright ~</span><span id="office"> PGWA</span></div>
    	<div> <span id="go">Miss Amber Deveraux ~</span><span id="office"> PGWA</span></div>
      <br>
      <div> <span id="go">Mr. Art Pitsford, Emeritus </span></div>
    </center>
  <div class="mozilla"></div>
  <div class="mozilla"></div>
  <div class="mozilla"></div>
    <!-- end #mainContent -->
  </div>
<?php 
  include( INC . 'footer.php');
 ?>