
 <?php
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php"); 
   $pageHeight = "HomeHeight";
   $pageType = "Home";
   $mainPage  = true;

   include(INC . 'header.php');
   include(INC . 'sidebar.php');
  ?>

<div id="mainContent">
   <div id="Frontpage">
     <!--<a href="<?php //echo BASE_URL;?>GrandAssembly/Registration"> 
                                   <img src="/images/RegBG.gif" 
                                   class="GAReg" alt="GA Registration"border="0" /></a>-->
    <div class="GAReg">
      <div class="postit">
        <a href="<?php //echo BASE_URL;?>GrandAssembly/Registration"> 
            <div class="blue">Grand Assembly <br>Registration</div></a>

        <div class="green"><div class="congrats">
          Congratulations!</div> Grand Worthy Advisor-Elect <br> Alexa Templeton
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