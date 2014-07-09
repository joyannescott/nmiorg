<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

	//if(empty($_SESSION['user'])) 
    //{  
    //    $_SESSION['alert_message'] = "Please login to access this page.";
    //    header("Location: ". BASE_URL . "Login"); 
         
        // This die statement is absolutely critical.   
    //    die("Redirecting to login"); 
    //} 

   $pageType   = "GA";
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);

   include( INC . 'header.php');
   include( INC . 'sidebar.php');


  ?>

  <div id="mainContent">
   <div id="FrontLogin">
      <?php include(LOGIN . "login_header.php"); ?>
   </div>

	<div id="Gallery">
  	<h1>Grand Assembly 2014</h1><h2>Click to Enlarge - Refresh to Shuffle</h2>
  		<ul id="imageGallery">
		<?php for($i=1; $i<=100; $i++){?>
		<li><div class="imgNum<?php echo $i;?>"></div></li>
		<?php }?>
	</ul>
    </div>
    <script type="text/javascript"> 
		var $numPhotos = 100;
		var $columns = 5;
		var $photoSize = 125;
		var $horzSpread = 145;
		var $vertSpread = 125;
		var $vertOffset = 30;
		var $horzOffset = 20;
		var $photoPath = "/images/GA2014Pics/GA2014_";
		var $photoCaption = "Grand Assembly 2014";
		var $fullScreenScale = 1.25;
    </script>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>js/gallery.js"></script>

    <!-- end #mainContent --></div>
 <?php 
  include( INC . 'footer.php');
 ?>










