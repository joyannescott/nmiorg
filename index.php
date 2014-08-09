<?php
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php"); 
   require( INC . "database.php");

   $pageType = "Home";
   $mainPage  = true;
    //echo . "\n\n";
   //$browser = get_browser(null, true);

    //Send Email
    require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();         
    $email_body = "";
    $email_body = $email_body .  "<br><br>" . $_SERVER['HTTP_USER_AGENT']  . "<br><br>";

    $mail->From  = "joyfitz@mac.com";
    $mail->FromName  = "New Mexico Rainbow";
    $address = "joyfitz@mac.com" ;
    $name = "Joy Scott";
    $mail->AddAddress($address, $name);
    $mail->Subject    = "Home Page Hit";
    $mail->MsgHTML($email_body);

    if($mail->Send()) {

    } else {
      $alert_message = "There was a problem sending the email: " . $mail->ErrorInfo;
    }

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
        <div class="blue">
          <div class="farewell"> 
            Welcome<br>
            <a href="<?php echo BASE_URL;?>SupremeDeputy">Mom Mary</a><br>
            as our new<br> 
            <a href="<?php echo BASE_URL;?>SupremeDeputy">Supreme Deputy!!</a><br>
          </div>
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