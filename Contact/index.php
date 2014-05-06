<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   $pageHeight = "ContactHeight";
   $pageType   = "Contact";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">

  	<div id="offsetTitle"><h1> <img src="<?php echo BASE_URL;?>images/Contact.gif" /><br /></h1></div>
    
    <div  id="FullBorderTable">
    <table>
      <tr>
        <td ><span id="officeRep" >Supreme Inspector</span><br />  
        <span id="goRep">Mrs. Roberta Myers</span><br />        </td>
        <td ><a href="mailto:gbmyers2@comcast.net">gbmyers2@comcast.net</a></td>
      </tr>
      <tr>
        <td ><span id="officeRep" >Grand Assembly </span><br/>
         <span id="goRep"> Mrs. Phoebe Wright<br/>
                           Mrs. Catherine Hatcher</span></td>
        <td><a href="mailto:epwright@cableone.net">epwright@cableone.net</a><br/>
            <a href="mailto: Catherine.Hatcher@gmail.com">catherine.hatcher@gmail.com</a></td>
      </tr>
      <tr>
        <td ><span id="officeRep" >Special Events </span><br/>
          <span id="goRep">Mrs. Phoebe Wright</span></td>
        <td><a href="mailto:epwright@cableone.net">epwright@cableone.net</a><br/></td>
       <tr>
        <td ><span id="officeRep" >Grand Cross of Color</span><br />
          <span id="goRep">Mrs. Tsenre Deveraux</span></td>
        <td><a href="mailto:mtdeveraux@comcast.net">mtdeveraux@comcast.net</a></td>
      </tr>
       <tr>
        <td ><span id="officeRep" >Sunset Gazette</span><br />
          <span id="goRep"> Mrs. Judy Goldie</span><br /></td>
        <td><a href="mailto:judygoldie1@gmail.com">judygoldie1@gmail.com</a></td>
      </tr>
      <tr>
        <td ><span id="officeRep" >Website</span><br />
          <span id="goRep"> Mrs. Joy Scott <br/>
                           Miss Keilyn Wright</span></td>
        <td><a href="mailto:joyfitz@mac.com">joyfitz@mac.com</a> <br/>
            <a href="mailto:keilynwriggit@yahoo.com">keilynwriggit@yahoo.com</a></td>
      </tr>
      <tr>
        <td ><span id="officeRep" >Alumni Representative</span><br />
         <span id="goRep">Mrs. Lisa Lents</span></td>
        <td><a href="mailto:ljw5891@gmail.com"/>ljw5891@gmail.com</a> </td>
      </tr>
      <tr>
        <td ><span id="officeRep" >Foundation</span><br />
         <span id="goRep"> Mr. Wayne Morrison</span></td>
        <td><a href="mailto:morrison12376@hotmail.com">morrison12376@hotmail.com</a> </td>
      </tr>
    </table>
  </div>

</div><!-- end #mainContent -->

<?php 
  include( INC . 'footer.php');
?>
