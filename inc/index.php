<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   $pageHeight = "GAHeight";
   $pageType   = "GA";
   $pageSubType = "GACount";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
    <FORM name="clock">
  <div id="FullBorderTable">
    
    <TABLE BORDER=1 CELLSPACING=0 CELLPADDING=2 width="760" 
        style="margin-left:0px">
  
    <TD ALIGN=CENTER WIDTH="514" rowspan="2"><h4><b><br />Countdown to Grand Assembly</b></h4></TD>
    <TD ALIGN=CENTER WIDTH="111" ><b>Days</b></TD>
      <TD ALIGN=CENTER WIDTH="111" ><b>Hours</b></TD>
    <TD ALIGN=CENTER WIDTH="112" ><b>Minutes</b></TD>
    <TD ALIGN=CENTER WIDTH="112" ><b>Seconds</b></TD>
    <TR>
    <TD ALIGN=center width="111"><INPUT name="days" size=4 
          style="text-align: Center; font-family: Times; font-size: 18pt; color: #008000"></TD>
    <TD ALIGN=CENTER width="111"><INPUT name="hours" size=4
          style="text-align: Center; font-size: 18pt; color: #008000; font-family: Times"></TD>
    <TD ALIGN=CENTER width="112"><INPUT name="mins" size=4 
          style="text-align: Center; font-family: Times; font-size: 18pt; color: #008000"></TD>
    <TD ALIGN=CENTER width="12"><INPUT name="secs" size=4 
          style="text-align: Center; font-family: Times; font-size: 18pt; color: #008000"></TD>
    </TR>
    </TABLE>
     </div>
   </FORM>
&nbsp;&nbsp;

 
          <ul id="slider">



    <li>     
      <center>   
        <h1>Grand Assembly of New Mexico</h1>
        <h4>June 17 - 20, 2014<br>
            Sheraton Albuquerque Airport Hotel, Albuquerque, NM</h4> 

        <h2><a href="Registration"> <img src="<?php echo BASE_URL;?>images/GAReg.gif" 
               alt="Grand Assembly Registration" /></a></h2>
        <h1><img src="<?php echo BASE_URL;?>images/GACollage.gif"  class="collagePics" alt="Grand Assembly Collage"  /></h1>
      </center>
    </li>
    <li>
      <h1> Sunshine Service &amp; Youth Protection Session 
      <h4>Wednesday, June 18, 2014 <br>
      8:00am – 3:00pm </h4>

      <p>Cost: $25.00-includes lunch and transportation Transportation for the day will be by school bus. Albuquerque is a large community. 
      Transporting many people is safer on a school bus than in individual cars. </p>
       
       <div class="freehand"><div class="red">Youth Protection</div> </div>
      <p>8:00 – 9:00 – Physical Safety in public places and self-defense 
      will be covered this year. </p>
       
      <div class="freehand"><div class="orange">Sunshine Service</div></div>
      <p> 9:15 – Leave for Veterans’ Memorial Park where we 
      will be involved in several different activities while 
      visiting the museum and touring the park. </p>
       
      <div class="freehand"><div class="Yellow">Lunch</div></div>
      <p>Lunch will be provided upon return to the Grand Assembly hotel! 
      Lunch is included in the cost of this session. </p>

       <div class="freehand"><div class="Green">Mural</div> </div>
      <p>We will spend some time after lunch working on Serina’s 
      special project. Depending on time we may complete other 
      service projects for Veterans. </p>

    </li>
    </ul>

&nbsp;&nbsp;

   <div id="FullBorderTable">
      <table width="760">
        <tr>
          <th colspan="3"> For any questions regarding NM Grand Assembly contact:</th>
        </tr>
        <tr>
          <td>Phoebe Wright</td>
          <td>505-715-1960</td>
          <td><a href="mailto: epwright@cableone.net">epwright@cableone.net</a> </td>
        </tr>
        <tr>
          <td>Catherine Hatcher</td>
          <td> 505-715-0188</td>
          <td> <a href="mailto: catherine.hatcher@gmail.com">catherine.hatcher@gmail.com</a></td>
        </tr>
      </table>
     </div>       
     &nbsp;&nbsp;

 
    <!-- end #mainContent --></div>
 <?php 
  include( INC . 'footer.php');
 ?>