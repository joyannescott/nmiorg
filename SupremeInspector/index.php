<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require_once( INC . "database.php");

   $pageType   = "SI";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
    <div align=left style="margin-right:300px"><h1><img src="<?php echo BASE_URL;?>images/SI.gif"  alt="Supreme Inspector" width="303" height="123" /></h1></div>
    <h1>Mrs. Roberta Boney Myers<br />
         &#147;Aunt Bobby&#148;</h1>
    <div id="ClearTwoColumn">
    <table width="700" border="0">
      <tr>
        <td width="375">
          <h2 align="center">Supreme Chaplain <hr /></h2> 
          <h4 align="center">Past Grand Worthy Advisor<br />
            Grand Assembly of New Mexico<br />
            1956-1957
          </h4>
          <h3>&dagger; Past Supreme Drill Leader<br />
              &dagger; Past Supreme Religion    <br />
              &dagger; Past Supreme Immortality <br />
              &dagger; Past Supreme Patriotism  <br />
              &dagger; Past Supreme Nature      <br />
              <br />
              Member of the House of Gold</h3>
              <h4>International Order 
              of the <br />
              Rainbow for Girls</h3> 
                   </td  >
        <td width="300">
        <h1><br /><img src="<?php echo BASE_URL;?>images/Graphics/AuntBobbySmall.jpg" width="288" height="340" alt="Bobby" /></h1>  
        <h4>Contact Mrs. Myers: <br /><a  href="mailto:gbmyers2@comcast.net">gbmyers2@comcast.net</a></p></h4></td>
      </tr>
    </table></div>
    <div id="bio"><span id=drop-quote>&#147;</span>Aunt Bobby<span id=drop-quote>&#148;</span>, as our Supreme Inspector, Mrs. Roberta Boney Myers, is fondly known by New Mexico Rainbow Girls, began her Rainbow life in Las Cruces Assembly #12 where she later served as Worthy Advisor. In 1956-57 she served the Grand Assembly of New Mexico as Grand Worthy Advisor.<br /> <br /></div>
<div id="bio">
  <span id=drop-quote>&#147;</span>Aunt Bobby<span id=drop-quote>&#148;</span> is a graduate of New Mexico State University with a degree in Elementary Education. She has taught school and been a substitute teacher. She is active in St. Paul&#146;s United Methodist Church and serves on local, district and conference committees for her church. She is a member of Las Cruces Chapter #20, Order of the Eastern Star and is a P.E.O. She is married to Greeley W. Myers and they have two children, Patricia Myers and Greeley R. Myers. She is a grandmother to three wonderful grandchildren.
</div>
   <h1><img src="<?php echo BASE_URL;?>images/BobbyCollage.gif"  class="collagePics" alt="Supreme Inspector"  /></h1>

<!-- end #mainContent --></div>
 <?php 
  include( INC . 'footer.php');
 ?>