<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "Home";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>
  <div id="mainContent">
      <?php include(LOGIN . "login_header.php"); ?>
  	<h1>2014 &ndash; 2015 Calendar</h1>
    <div id="FullBorderTable">
  	<table>
  	
      <tr>
        <td>July 8, 2014</td>
        <td>Founder&#8217;s Day</td>
      </tr>
      <tr>
        <td>July 10 &ndash; 13, 2014</td>
        <td>DeMolay Convention</td>
      </tr>
      <tr>
        <td>July 24 &ndash; 30, 2014</td>
        <td>Supreme Assembly &mdash; Baltimore, Maryland</td>
      </tr>
      <tr>
        <td>September 6 &ndash; 7, 2014</td>
        <td>GWA Send Off and Ashlar #58 Official Visit</td>
      </tr>
      <tr>
        <td>September 20, 2014</td>
        <td>Farmington #35 Official Visit</td>
      </tr>
       <tr>
        <td>October 8, 2014</td>
        <td>OES Grand Chapter - Las Cruces</td>
      </tr>
      <tr>
        <td>October 25, 2014</td>
        <td>Rio Rancho #61 Official Visit</td>
      </tr>
      <tr>
        <td>November 1 &ndash; 2, 2014</td>
        <td>Fall Event</td>
      </tr>
      <tr>
        <td>November 8 &ndash; 9, 2014</td>
        <td>Amaranth Grand Court</td>
      </tr>
      <tr>
        <td>November, 2014</td>
        <td>Albuquerque Grand Cross of Color Banquet</td>
      </tr>
      <tr>
        <td>February 28, 2015</td>
        <td>Dorothy Pitsford #60, Clovis #8, <br/>Tucumcari #4 Official Visit </td>
      </tr>
      <tr>
        <td>March 7, 2015</td>
        <td>Copper Rose #62 Official Visit</td>
      </tr>
      <tr>
        <td>March 8, 2015</td>
        <td>Ruth Laws #55, Alamogordo #18 Official Visit</td>
      </tr>
      <tr>
        <td>March 21, 2015</td>
        <td>Masonic Grand Lodge</td>
      </tr>
      <tr>
        <td>April 5, 2015</td>
        <td>Rainbow Sunday</td>
      </tr>
      <tr>
        <td>April, 2015</td>
        <td>Rainbow Celebration</td>
      </tr>
      <tr>
        <td>April, 2015</td>
        <td>York Rite</td>
      </tr>

      <tr>
        <td>June 16 &ndash; 19, 2015</td>
        <td>Grand Assembly 2014 - Albuquerque</td>
      </tr>
    
  	</table>
    </div>
  </div>
 <?php 
  include( INC . 'footer.php');
 ?>