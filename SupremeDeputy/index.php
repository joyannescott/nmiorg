<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require_once( INC . "database.php");

   $pageType   = "SI";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
     <div class="freehand-h1"><div class="Green">Supreme Deputy</div></div>
    <div id="ClearTwoColumn">
    <table width="700" border="0">
      <tr>
        <td width="350">
         <h1>Mrs. Mary McClain<br />
         &#147;Mom Mary&#148;</h1>
          <h2 align="center">Supreme Deputy <hr /></h2> 
          </h4>
              <h4>Grand Jurisdiction of New Mexico <br>
                International Order 
              of the <br />
              Rainbow for Girls</h3> 
                   </td  >
        <td width="325">
        <h1><br /><img src="<?php echo BASE_URL;?>images/MomMary.JPG" width="250"  alt="Mary" /></h1>  
        <h4>Contact Mrs. McClain: <br /><a  href="mailto:rmmcclain@swwmail.net">rmmcclain@swwmail.net</a></p></h4></td>
      </tr>
    </table></div>
    <!--<div id="bio"><span id=drop-quote>&#147;</span>Aunt Bobby<span id=drop-quote>&#148;</span>, as our Supreme Inspector, Mrs. Roberta Boney Myers, is fondly known by New Mexico Rainbow Girls, began her Rainbow life in Las Cruces Assembly #12 where she later served as Worthy Advisor. In 1956-57 she served the Grand Assembly of New Mexico as Grand Worthy Advisor.<br /> <br /></div>
<div id="bio">
  <span id=drop-quote>&#147;</span>Aunt Bobby<span id=drop-quote>&#148;</span> is a graduate of New Mexico State University with a degree in Elementary Education. She has taught school and been a substitute teacher. She is active in St. Paul&#146;s United Methodist Church and serves on local, district and conference committees for her church. She is a member of Las Cruces Chapter #20, Order of the Eastern Star and is a P.E.O. She is married to Greeley W. Myers and they have two children, Patricia Myers and Greeley R. Myers. She is a grandmother to three wonderful grandchildren.
</div>-->
   <h1><img src="<?php echo BASE_URL;?>images/MaryCollage.gif"  class="collagePics" alt="Supreme Deputy"  /></h1>

<!-- end #mainContent --></div>
 <?php 
  include( INC . 'footer.php');
 ?>