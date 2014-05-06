<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   $pageHeight = "FoundDonateHeight";
   $pageType   = "Foundation";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
?>

<div id="mainContent">
  
  <center>

    <span id="foundLogo"><img src="<?php echo BASE_URL;?>images/Foundation logo.jpg" alt=""  /></span> 
    <h1>Make New Mexico Rainbow Shine Brighter</h1>

    <p><a href="../Board">Rainbow Girls Foundation of New  Mexico, Inc.</a></p>
    <p>  Please print and complete this page, and send it with your contribution to:<br>
         Mr. Ernest Pompeo, Treasurer <br />
         9820 Signal Avenue NE, Albuquerque, NM 87122</p>

    <div id="FullBorderTable">
      <table width="650" border="2" cellspacing="2" cellpadding="0" bgcolor="#ffffff">
        <tr>
          <td width="203">Donor's Name</td>
          <td colspan="3" width="576">&nbsp;</td>
        </tr>
        <tr>
          <td width="203">Donor's Address</td>
          <td width="208"><div align="center"> City</div></td>
          <td width="146"><div align="center"> State</div></td>
          <td width="214"><div align="center"> Zip</div></td>
        </tr>
        <tr>
          <td width="203"></td>
          <td width="208">&nbsp;</td>
          <td width="146">&nbsp;</td>
          <td width="214">&nbsp;</td>
        </tr>
        <tr>
          <td width="203">Amount of Contribution</td>
          <td colspan="3" width="576"><nobr> $</nobr></td>
        </tr>
        <tr>
          <td colspan="4" width="783"><div align="center"> <b>
              Checks should be made payable to &quot;Rainbow Girl's Foundation of New Mexico&quot;</b></div>
          </td>
        </tr>
        <tr>
          <td colspan="4" width="783"><div align="center"> Please make my gift:</div></td>
        </tr>
        <tr>
          <td width="203"><span id="check">&loz;</span> In Memory of</td>
          <td colspan="3" width="576">&nbsp;</td>
        </tr>
        <tr>
          <td width="203"><span id="check">&loz;</span> In Honor of</td>
          <td colspan="3" width="576">&nbsp;</td>
        </tr>
        <tr>
          <td width="203">Send Acknowledgement to</td>
          <td colspan="3" width="576">&nbsp;</td>
        </tr>
        <tr>
          <td width="203">At Address</td>
          <td colspan="3" width="576">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4" width="783">The acknowledgement to the designated person will specify the amount contributed only if you check this box <span id="check">&loz;</span></td>
        </tr>
      </table>
   </div>
   
  <p>The Masonic Charities of New Mexico is a charitable organization under <br/>
     section 501(c)(3)  of the Internal Revenue Code. <br />
     Your contribution is deductible as provided by law. 
  </p>
  <p>For any questions regarding the foundation send email to: <br />Mr. Wayne Morrison at &ndash;
     <a href="mailto:morrison12376@hotmail.com">morrison12376@hotmail.com</a>
  </p>

 </div><!-- end #mainContent -->
   
 <?php 
  include( INC . 'footer.php');
 ?>
