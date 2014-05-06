<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   $pageHeight = "FoundScholarHeight";
   $pageType   = "Foundation";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
?>

<div id="mainContent">
	<center>
	  <span id="foundLogo">
	  	<img src="<?php echo BASE_URL;?>images/FoundScholarcover.jpg"  alt="Application Information 1" /> 
	    <img src="<?php echo BASE_URL;?>images/FoundScholarcover2.jpg" alt="Application Information 2"/>
	  </span>
	  <h2><a href="<?php echo BASE_URL;?>images/FoundationScholarForm.pdf">SCHOLARSHIP APPLICATION FORM</a></h2>
</div>

<?php 
  include( INC . 'footer.php');
?>
