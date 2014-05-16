<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType      = "Home";
   $pageSubType   = "Alumni";


   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>
  
      <h1> IORG Alumni Association - New Mexico </h1> 
           &nbsp;&nbsp;
      <div class="freehand-h2"><div class="Red">Are you a New Mexico Rainbow Majority Member?</div> </div>
          <p>
          <span class="fb-wrap"><a href='https://www.facebook.com/groups/IORGAlumniNewMexico/'><span class="fb"></span></a></span>
          &nbsp; Join our new Alumni Facebook Group! </p>

     
       &nbsp;
       <div class="freehand-h2"><div class="Orange">IORG Alumni Association</div> </div>
      <p>Membership in the Alumni Association of the International Order of the Rainbow for Girls is open to former members 
         of the International Order of the Rainbow for Girls in good standing AND adult supporters.
         It is our hope that a successful Alumni Association will bring to Rainbow an additional pool of talent to assist us and help 
         Rainbow grow.
         </p>
      <div class="freehand-h2"><div class="Yellow">Vision</div></div>
      <p> To sustain the lifelong friendships established through membership in the International Order of the Rainbow for Girls </p>
       
      <div class="freehand-h2"><div class="Green">Mission</div></div>
      <p>To enhance the lifelong friendships of all members of the International Order of the Rainbow for Girls through leadership 
        developments and an exceptional sisterhood experience.</p>



     <div class="freehand-h2"><div class="Blue">Information</div></div> 
             <p>      Please visit this link for more information: 
         <a href='https://www.gorainbow.org/members/login.taf'/>https://www.gorainbow.org/members/login.taf</a>. </p>

 
     <div class="freehand-h2"><div class="Indigo">Membership Application</div></div> 
      <p> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/IORG_Alumni.pdf"> PDF Document</a></p> 

    <div class="freehand-h2"><div class="Violet">Contact</div></div> 
      <h4> Lisa Lents - Jurisdictional Alumni Representative - NM - <a href="mailto:ljw5891@gmail.com"/>ljw5891@gmail.com</a></h4> 
  
     &nbsp;
     <center><img src="<?php echo BASE_URL;?>images/Alumni.jpeg" /></center>

     &nbsp;

 
    <!-- end #mainContent --></div>
 <?php 
  include( INC . 'footer.php');
 ?>