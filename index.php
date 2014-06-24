<?php
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php"); 
   require( INC . "database.php");

   $pageType = "Home";
   $mainPage  = true;

   include(INC . 'header.php');
   include(INC . 'sidebar.php');
  ?>

<div id="mainContent">
   <div id="Frontpage">
   <div id="FrontLogin">
      <?php include(LOGIN . "login_header.php"); ?>
   </div>
    <div class="GAReg">
      <div class="postit">
        <div class="blue"><div class="farewell"> On July 30th, 2014<br>
          We will bid farewell to<div class="red"><div class="name"> Aunt Bobby</div></div> as our<br> <a href="<?php echo BASE_URL;?>SupremeInspector">
          Supreme Inspector</a><br></div>1993-2014
        </div>
      </div>
    </div>

     <a href="<?php echo BASE_URL;?>JoinRainbow/#&panel1-1"> 
                                   <img src="/images/WhatIsRainbow.gif" 
                                   class="what" alt="What is Rainbow?" border="0" /></a>
     <a href="<?php echo BASE_URL;?>JoinRainbow/#&panel1-4"> 
                                    <img src="/images/HowDoIJoin.gif" 
                                    class="how" alt="How do I join?" border="0" /></a> 
  	<div class="wrap">
  		<div class="side-a"></div>
  		<div class="side-b"></div>
  	</div>
  </div>
</div>
 <?php 
  include(INC . 'footer.php');
 ?>