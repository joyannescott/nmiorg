<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "Foundation";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>

    <center>
      <span id="foundLogo"><img src="<?php echo BASE_URL;?>images/Foundation logo.jpg" alt=""  /></span>
      <div id="titleOffset"><span id="title"><h1><img src="<?php echo BASE_URL;?>images/Foundation.gif" /></h1></span></div>
    </center>

    <h1>Rainbow Girl's Foundation of New Mexico</h1>
    <h1>Our Mission</h1>

    <div id="mission">It is the object of this Foundation to raise money through tax-deductible contributions 
                      to help the New Mexico Grand Assembly (IORG) educate and train members of the Order. 
                      Education programs about leadership, development, service, charity, public speaking and 
                      organizational skills will enhance and benefit the membership and the individual girls 
                      as members.</div>
    <div id="mission">The Foundation has been established for Rainbow members pursuing post-secondary education. 
                      Finacial need, merit, and academic potential will be considered as well as their desired 
                      field of study</div>
    <div id="mission">The International Order of the Rainbow for Girls (IORG) is open to all young (ages 11 to 20) 
                      women, without regard to race, creed, color, national origin or family relationship as a 
                      voluntary association. Reinforcing basic moral values, the organization emphasizes service 
                      and charity and prepares young women to work well together and to effectively organize and 
                      lead a group.</div>

 </div><!-- end #mainContent -->

 <?php 
  include( INC . 'footer.php');
 ?>