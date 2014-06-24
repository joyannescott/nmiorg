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
    <h1>Foundation Board</h1>

    <div> <span id="go">Mr. Wayne Morrison ~</span> <span id="office">Past Grand Master, Chairman</span></div>
    <div> <span id="go">Mr. Michael Deveraux ~</span> <span id="office"> Vice Chairman</span></div>
    <div> <span id="go">Miss Erin Atkins ~ </span> <span id="office">Grand Executive, PGWA</span></div>
    <div> <span id="go">Mrs. Kim Moreno ~ </span> <span id="office">Grand Executive, PGWA</span></div>
    <div> <span id="go">Mr. Ernest Pompeo ~</span> <span id="office"> Grand Executive</span></div>
    <div> <span id="go">Mrs. Georgia Morphis ~</span> <span id="office"> Past Grand Matron</span></div>
    <div> <span id="go">Mrs. Diane Rogers ~</span> <span id="office"> Grand Executive</span></div>
    <div> <span id="go">Mr. Bert Atkins ~</span> <span id="office"> Grand Executive</span></div>
    <div> <span id="go">Mrs. Susan Wallin ~</span> <span id="office"> Past Mother Advisor</span></div>
    <div> <span id="go">Mrs. Gayle Smith ~ </span> <span id="office">Past Grand Matron</span></div>
    <div> <span id="go">Mrs. Roberta Myers ~ </span> <span id="office">Ex Officio</span></div>

  </center>
</div><!-- end #mainContent --> 

<?php 
  include( INC . 'footer.php');
 ?>