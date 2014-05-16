<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "Home";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>
  <div id="mainContent">
      <?php include(LOGIN . "login_header.php"); ?>
  	<h1>2013 &ndash; 2014 Calendar</h1>
    <div id=FullBorderTable>
  	<table>
  	
  	  <tr>
  	    <td>September 21, 2013</td>
  	    <td>GWA Send Off and Ruth Laws #55/ Alamogordo #18 Official Visit</td>
      </tr>
      <tr>
        <td>October 12 &ndash; 13, 2013</td>
        <td>Fall Event</td>
      </tr>
      <tr>
        <td>October 16 &ndash; 19, 2013</td>
        <td>OES Grand Chapter - Las Cruces</td>
      </tr>
      <tr>
        <td>November 2, 2013</td>
        <td>Rio Rancho Official Visit</td>
      </tr>
      <tr>
        <td>November 7, 2013</td>
        <td>Amaranth Grand Court</td>
      </tr>
      <tr>
        <td>November 8 &ndash; 10, 2013</td>
        <td>Demolay Convention</td>
      </tr>
      <tr>
        <td>February 15, 2014</td>
        <td>Copper Rose #62 Official Visit</td>
      </tr>
      <tr>
        <td>March 8, 2014</td>
        <td>Ashlar #58 Official Visit</td>
      </tr>
      <tr>
        <td width="225">March 9, 2014</td>
        <td width="467">Dorothy Pitsford #60, Clovis #8, <br/>Tucumcari #4 Official Visit </td>
      </tr>
      <tr>
        <td>March 20 &ndash; 22, 2014</td>
        <td>Masonic Grand Lodge - Las Cruces</td>
      </tr>
      <tr>
        <td>April 6, 2014</td>
        <td>Rainbow Sunday</td>
      </tr>
      <tr>
        <td>April 26 &ndash; 27, 2014</td>
        <td>Rainbow Celebration</td>
      </tr>
      <tr>
        <td>May 18, 2014</td>
        <td>Farmington #35 Official Visit</td>
      </tr>

      <tr>
        <td>June 17 &ndash; 20, 2014</td>
        <td>Grand Assembly 2014 - Albuquerque</td>
      </tr>
    
  	</table>
    </div>
  </div>
 <?php 
  include( INC . 'footer.php');
 ?>