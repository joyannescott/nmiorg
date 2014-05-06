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

 
  <ul id="sliderGA">
    <li>     
      <center>   
        <p>&nbsp;</p>
        <h1>Grand Assembly of New Mexico</h1>
        <h4>June 17 - 20, 2014<br>
            Sheraton Albuquerque Airport Hotel, Albuquerque, NM</h4>      

        <h2><a href="Registration"> <img src="<?php echo BASE_URL;?>images/GAReg.gif" 
               alt="Grand Assembly Registration" /></a></h2>
              <p>&nbsp;</p>
        <div id="blueBg"><h1>
          <img src="<?php echo BASE_URL;?>images/GACollage.gif"  class="collagePicsCard" alt="Grand Assembly Collage"  />
        </h1></div>
      </center>
    </li>
    <li> <?php include('Mon_Tues.php'); ?></li>
    <li> <?php include('Wed.php'); ?></li>
    <li> <?php include('Thurs.php'); ?></li>
    <li> <?php include('Fri_Sat.php'); ?></li>
   <li>
      <h1> Sunshine Service &amp; Youth Protection Session 
      <h4>Wednesday, June 18, 2014 <br>
      8:00am – 3:00pm </h4>

      <p>Cost: $25.00-includes lunch and transportation Transportation for the day will be by school bus. Albuquerque is a large community. 
      Transporting many people is safer on a school bus than in individual cars. </p>
       
       <div class="freehand-h2"><div class="red">Youth Protection</div> </div>
      <p>8:00 – 9:00 – Physical Safety in public places and self-defense 
      will be covered this year. </p>
       
      <div class="freehand-h2"><div class="orange">Sunshine Service</div></div>
      <p> 9:15 – Leave for Veterans’ Memorial Park where we 
      will be involved in several different activities while 
      visiting the museum and touring the park. </p>
       
      <div class="freehand-h2"><div class="Yellow">Lunch</div></div>
      <p>Lunch will be provided upon return to the Grand Assembly hotel! 
      Lunch is included in the cost of this session. </p>

       <div class="freehand-h2"><div class="Green">Mural</div> </div>
      <p>We will spend some time after lunch working on Serina’s 
      special project. Depending on time we may complete other 
      service projects for Veterans. </p>

    </li>

    <li>
      <h1> 2014 Competitions</h1>
      <div class="freehand-h2"><div class="Red">Scrapbook Competition</div></div> 
      <div id="rainbow"><p> Theme: &ldquo;Paint Your Rainbow &mdash; Be the Change&rdquo; </p></div>
       
       
      <div class="freehand-h2"><div class="Orange">Grand Officer Competition </div></div> 
      <div id="rainbow"><p>
            Make a &ldquo;Paint Palette&rdquo; that represents you. <br>
            To be modeled at the Grand Officers Luncheon.</p></div>
       
       
      <div class="freehand-h2"><div class="Yellow">Mark Your Spot Competition </div></div> 
      <div id="rainbow"><p> &ldquo;Four Leaf Clover L-U-C-K&rdquo; &mdash; <br>NEW COMPETITION 
       &mdash; all non-Grand Officers may compete &hellip; including adults! <br> 
       Design a tag to place on your chair at Grand Assembly for all members not<br>
       sitting on the Grand Assembly Floor. They will be place on the back of the chairs
       beggining with Thursday monring's opening session. </p></div>
       
       
      <div class="freehand-h2"><div class="Green">T-Shirt Competition</div></div>
      <div id="rainbow"> <p> &ldquo;Feather Quill&rdquo; &mdash;
      for girls ages 11-14 &mdash; to be modeled at the Talent Show.  </p></div>
  </li>
   <li>
    <h1> 2014 Competitions Continued</h1>
      <div class="freehand-h2"><div class="Yellow"> Pages Competition</div></div> 
      <div id="rainbow"><p>  &ldquo;Light Your Own Lantern&rdquo; &mdash;
       to be modeled at the Talent Show . Create your own "Lantern" to express your personality. </p></div>
       
       
      <div class="freehand-h2"><div class="Green">Grand Representative Poster Competition </div></div> 
      <div id="rainbow"><p>Theme: &ldquo;Live, Laugh, and Love Everyday&rdquo; Poster <br>
       </p></div>
       
       
      <div class="freehand-h2"><div class="Blue">Tote Bag Competition</div></div> 
      <div id="rainbow"><p> Theme: &ldquo;Horses and Free Spirit&rdquo; </p> </div>
       
       
      <div class="freehand-h2"><div class="Indigo"> Talent Show </div></div>
      <div id="rainbow"><p> &ldquo;Whoooot-A-Nanny&rdquo;<br> We are going to have an OWL of a good time <br>
      Perform a Skit, a Musical number, a Drill, a Dance performance or a Special talent. <br>
      NEW: All Entry Forms for this even must be submitted with Grand Assembly Packet.  </p></div>
       
       
      <div class="freehand-h2"><div class="Violet">Ritual Competition</div></div> 
      <div id="rainbow"><p>  For all Rainbow Girls  </p>
        <p> <br> See the <a href="Registration">Grand Assembly Registration</a> packet for more information <br>
          and entry forms</div>

   </li>
 </ul>

<div id="space"> </div>

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